<?php

namespace App\Http\Controllers;

use App\Model\User;
use App\Model\UserSaldo;
use App\Model\Util;
use App\Model\Validacao;
use Doctrine\Instantiator\Exception\ExceptionInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\ValidaVoucher;

class ValidaVoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $validavoucher;
    protected $usersaldo;
    protected $validacao;

    public function __construct(ValidaVoucher $validaVoucher, UserSaldo $userSaldo, Validacao $validacao)
    {
        $this->validavoucher = $validaVoucher;
        $this->usersaldo = $userSaldo;
        $this->validacao = $validacao;
    }


    public function putQueimarVoucher(Request $request)
    {


        try {

            $dados = $this->validavoucher->where('codigo', 'LIKE', '%' . $request->get('codigo') . '%')->first();
            dd($dados);
//            $dados = $this->validavoucher->where('codigo', $request->get('codigo'))->first();


            if (isset($dados)) {

                if ($dados->status == 'pendente') {

                    $array = [
                        'codigo_ativacao_id' => $dados->id,
                        'user_id' => $request->get('user_id'),
                        'saldo' => $dados->qtd_cheque,
                        'user_email' => $request->get('email'),
                        'dt_expiracao' => date('Y-m-d'),
                        'criado' => date('Y-m-d H:i:s')
                    ];

                    $this->usersaldo->create($array);

                    $this->validavoucher->where('codigo', $request->get('codigo'))->update(
                        [
                            'status' => 'ativado',
                            'dt_ativacao' => date('Y-m-d H:i:s'),
                            'user_id_ativacao' => $request->get('user_id'),
                            'user_email_ativacao' => $request->get('email'),
                            'dt_saida' => date('Y-m-d')
                        ]
                    );
                    return \Response::json(['sucesso' => 'validação realizada com sucesso']);
                } else {
                    return \Response::json(['sucesso' => 'Este codigo já foi ativado obrigado!']);
                }


            } else {
                return \Response::json(['error' => 'Código invalido!']);
            }

        } catch (Exception $e) {
            return \Response::json(['error' => 'ocorreu algum erro']);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCodigos($id)
    {
        return $this->validavoucher->where('user_id_ativacao', $id)->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function getVerificarSaldo($id)
    {
        $result = $this->usersaldo->where('user_id', $id)->where('saldo', '>', 0)->first();

        if (!$result) {
            return \Response::json(['error' => 'Você não possui saldo!']);
        } else {
            return $result;
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function putQueimarSaldoPecas($id, $slug)
    {

        $get_saldo = $this->usersaldo->find($id);
        $total = Util::debitarSaldo($get_saldo->saldo);

        $results = $this->getpeca($slug);

        $dados_user = User::getUser($get_saldo->user_id);

        $codigo = Util::gerarCodigo();
        $data_validade = Util::gerarData();

        $array = [
            'usuario_saldo_id' => $get_saldo->id,
            'user_id' => $get_saldo->user_id,
            'user_email' => $dados_user->user_email,
            'beneficiario_nome' => $dados_user->user_nicename,
            'beneficiario_email' => $dados_user->user_email,
            'cod_validacao' => $codigo,
            'beneficio_id' => $results['id'],
            'tipo_beneficio' => 'pecas',
            'dt_validade' => $data_validade,
            'slug' => $slug
        ];

        $this->saveValidacao($array);

        $telefone_user = $dados_user->ddd_tel_res . ' ' . $dados_user->num_tel_res;
        $data_validade = Util::dateFormat($data_validade);

        $dados = [
            'template' => 'email.template',
            'codigo' => $codigo,
            'nome' => $results['nome'],
            'elenco' => $results['elenco'],
            'teatro' => $results['teatro'],
            'endereco_teatro' => $results['endereco_teatro'],
            'telefone_teatro' => $results['telefone_teatro'],
            'dias' => $results['dias'],
            'classificacao' => $results['classificacao'],
            'temporada' => $results['temporada'],
            'user_nicename' => $dados_user->user_nicename,
            'user_email' => $dados_user->user_email,
            'num_cpf' => $dados_user->num_cpf,
            'telefone_user' => $telefone_user,
            'data_validade_de' => date('d/m/Y'),
            'date_validade_ate' => $data_validade

        ];
        $this->getDisparoDeEmail($dados);
        return $this->usersaldo->where('id', $get_saldo->id)->update(['saldo' => $total]);
    }

    public function putQueimarSaldoBeneficios($id, $slug)
    {

        $get_saldo = $this->usersaldo->find($id);
        $total = Util::debitarSaldo($get_saldo->saldo);

        $results = $this->getBeneficio($slug);

        $dados_user = User::getUser($get_saldo->user_id);

        $codigo = Util::gerarCodigo();
        $data_validade = Util::gerarData();

        $array = [
            'usuario_saldo_id' => $get_saldo->id,
            'user_id' => $get_saldo->user_id,
            'user_email' => $dados_user->user_email,
            'beneficiario_nome' => $dados_user->user_nicename,
            'beneficiario_email' => $dados_user->user_email,
            'cod_validacao' => $codigo,
            'beneficio_id' => $results['id'],
            'tipo_beneficio' => 'post',
            'dt_validade' => $data_validade,
            'slug' => $slug
        ];

        $this->saveValidacao($array);

        $telefone_user = $dados_user->ddd_tel_res . ' ' . $dados_user->num_tel_res;
        $data_validade = Util::dateFormat($data_validade);

        $dados = [
            'template' => 'email.template-beneficios',
            'codigo' => $codigo,
            'titulo' => $results['titulo'],
            'beneficio_horarios' => $results['beneficio_horarios'],
            'descricao' => $results['breve_descricao'],
            'localizacao' => $results['localizacao'],
            'site' => $results['site'],
            'como_utilizar' => $results['como_utilizar'],
            'user_nicename' => $dados_user->user_nicename,
            'user_email' => $dados_user->user_email,
            'num_cpf' => $dados_user->num_cpf,
            'telefone_user' => $telefone_user,
            'data_validade_de' => date('d/m/Y'),
            'date_validade_ate' => $data_validade

        ];
        $this->getDisparoDeEmail($dados);
        return $this->usersaldo->where('id', $get_saldo->id)->update(['saldo' => $total]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function getDisparoDeEmail($array)
    {

        Mail::send($array['template'], $array, function ($message) use ($array) {
            $message->from('contato@chequeteatro.com.br', 'Cheque Teatro');
            $message->to($array['user_email'], $array['user_nicename'])->subject('Voucher - Cheque Teatro');
        });
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function getpeca($nome)
    {
        $str = null;
        $ch = curl_init();
        if (isset($nome)) {

            $str = trim($nome);

            curl_setopt($ch, CURLOPT_URL, env('URL_API') . '/get-peca-app/?peca=' . $str);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $retorno = curl_exec($ch);
            curl_close($ch);

            if ($retorno) {
                return $json = json_decode($retorno, true);
            }
        }
    }
    public function getBeneficio($nome)
    {
        $str = null;
        $ch = curl_init();

        if (isset($nome)) {
            $str = 'beneficio=' . trim($nome);
        }

        curl_setopt($ch, CURLOPT_URL, env('URL_API') . '/beneficios-app/?' . $str);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $retorno = curl_exec($ch);
        curl_close($ch);

        if ($retorno) {
            return $json = json_decode($retorno, true);
        }

        return response()->json(['error' => '0', 'mensagem' => 'Não foi possível carregar as peças']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function saveValidacao($array)
    {

        try {

            $this->validacao->create($array);

        } catch (Exception $e) {
            return \Response::json(['error' => 'ocorreu algum erro']);
        }


    }
}
