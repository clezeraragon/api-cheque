<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FunctionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $Curl;

    public function __construct()
    {
        $this->Curl = curl_init();
    }

    public function getcurl()
    {
        return $this->Curl;
    }

    public function PageComoFunciona()
    {

        curl_setopt($this->Curl, CURLOPT_URL, env('URL_API') . '/como-funciona-app/');
        curl_setopt($this->Curl, CURLOPT_RETURNTRANSFER, 1);
        $retorno = curl_exec($this->Curl);
        curl_close($this->Curl);

        if ($retorno) {
            return $retorno;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function PageContato()
    {

        curl_setopt($this->Curl, CURLOPT_URL, env('URL_API') . '/contato-app/');
        curl_setopt($this->Curl, CURLOPT_RETURNTRANSFER, 1);
        $retorno = curl_exec($this->Curl);
        curl_close($this->Curl);

        if ($retorno) {
            return $retorno;
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function PageSobre()
    {

        curl_setopt($this->Curl, CURLOPT_URL, env('URL_API') . '/quem-somos-app/');
        curl_setopt($this->Curl, CURLOPT_RETURNTRANSFER, 1);
        $retorno = curl_exec($this->Curl);
        curl_close($this->Curl);

        if ($retorno) {
            return $retorno;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function PageDestaques()
    {
        $destaque = array(
//        array(
//            "titulo" => "Kit Cheque teatro + ingresso wet’n wild",
//            "descricao" => "Na compra do Kit Cheque Teatro você ganha um ingresso para o Wet’n Wild.",
//            "path_img" => "http://chequeteatro.com.br/wp/wp-content/uploads/2015/10/Wet_n_Wild.jpg",
//            "btn_nome" => "Compre Agora",
//            "link" => "#/app/comprar"
//        ),
            array(
                "titulo" => "Resort em Orlando",
                "descricao" => "Ganhe 10% de desconto em locação de casas no Resort Bella Vida, em Orlando.",
                "path_img" => "http://chequeteatro.com.br/wp-content/uploads/2015/10/Bella_Vida.jpg",
                "btn_nome" => "Pegue seu desconto",
                "link" => "#/app/beneficio/10-de-desconto-para-locacao-no-resort-bella-vida"
            )
//        ,
//        array(
//            "titulo" => "Valham-me Deuses!",
//            "descricao" => "Conheça as aventuras amorosas de Renilda, uma esteticista solitária que encontra um amor inusitado...",
//            "path_img" => "http://chequeteatro.com.br/wp/wp-content/uploads/2015/10/Valham-me_Deuses.jpg",
//            "btn_nome" => "Mais informações",
//            "link" => "#/app/peca-teatro/valham-me-deuses"
//        )
        );

        return \Response::json($destaque);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function PageFiltros()
    {
        $filtros = array('cidades', 'teatros', 'generos');

        if (isset($_GET['tipo']) and in_array($_GET['tipo'], $filtros)) {
            $str = null;

            if (isset($_GET['cidade'])) {
                $str = '&cidade=' . trim($_GET['cidade']);
            }

            curl_setopt($this->Curl, CURLOPT_URL, env('URL_API') . '/termos-app/?termo=' . $_GET['tipo'] . $str);
            curl_setopt($this->Curl, CURLOPT_RETURNTRANSFER, 1);
            $retorno = curl_exec($this->Curl);
            curl_close($this->Curl);

            if ($retorno) {
                return ($retorno);
            }
        }

        return response()->json(['error' => '0', 'mensagem' => 'Não foi possível carregar o filtro']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function PagePecas()
    {
        $str = null;

        if (isset($_GET['cidade'])) {
            $str = 'cidade=' . trim($_GET['cidade']);
        }

        if (isset($_GET['teatro'])) {
            if ($str) {
                $str .= "&";
            }

            $str .= 'teatro=' . trim($_GET['teatro']);
        }

        if (isset($_GET['genero'])) {
            if ($str) {
                $str .= "&";
            }

            $str .= 'genero=' . trim($_GET['genero']);
        }

        if ($str) {
            $str = "?" . $str;
        }


        curl_setopt($this->Curl, CURLOPT_URL, env('URL_API') . '/pecas-app/' . $str);
        curl_setopt($this->Curl, CURLOPT_RETURNTRANSFER, 1);
        $retorno = curl_exec($this->Curl);
        curl_close($this->Curl);

        if ($retorno) {
            return ($retorno);
        }

        return response()->json(['error' => '0', 'mensagem' => 'Não foi possível carregar as peças']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function PagePeca()
    {
        $str = null;

        if (isset($_GET['peca'])) {

            curl_setopt($this->Curl, CURLOPT_URL, env('URL_API') . '/get-peca-app/?peca=' . trim($_GET['peca']));
            curl_setopt($this->Curl, CURLOPT_RETURNTRANSFER, 1);
            $retorno = curl_exec($this->Curl);
            curl_close($this->Curl);

            if ($retorno) {
                return ($retorno);
            }
        }

        return response()->json(['error' => '0', 'mensagem' => 'Não foi possível carregar as peças']);
    }

    public function PageCategorias()
    {

        curl_setopt($this->Curl, CURLOPT_URL, env('URL_API') . '/categoria-beneficios/');
        curl_setopt($this->Curl, CURLOPT_RETURNTRANSFER, 1);
        $retorno = curl_exec($this->Curl);
        curl_close($this->Curl);

        if ($retorno) {
            return ($retorno);
        }

        return response()->json(['error' => '0', 'mensagem' => 'Não foi possível carregar as categorias']);
    }

    public function PageBeneficios()
    {

        $str = null;
//     var_dump(str_replace(" ", "-", $_GET['categoria']));
        if (isset($_GET['beneficio'])) {
            $str = 'beneficio=' . trim($_GET['beneficio']);
        }

        if (isset($_GET['categoria'])) {
            if ($str) {
                $str .= "&";
            }

            $str .= 'categoria=' . str_replace(" ", "-", trim($_GET['categoria']));
        }

        if ($str) {
            $str = "?" . $str;
        }

        curl_setopt($this->Curl, CURLOPT_URL, env('URL_API') . '/beneficios-app/' . $str);
        curl_setopt($this->Curl, CURLOPT_RETURNTRANSFER, 1);
        $retorno = curl_exec($this->Curl);
        curl_close($this->Curl);

        if ($retorno) {
            return ($retorno);
        }

        return response()->json(['error' => '0', 'mensagem' => 'Não foi possível carregar as peças']);
    }

    public function PageBusca()
    {

        $str = null;

        if (isset($_GET['string'])) {

            $str = '?string=' . trim($_GET['string']);

            curl_setopt($this->Curl, CURLOPT_URL, env('URL_API') . '/busca-app/' . $str);
            curl_setopt($this->Curl, CURLOPT_RETURNTRANSFER, 1);
            $retorno = curl_exec($this->Curl);
            curl_close($this->Curl);

            if ($retorno) {
                return ($retorno);
            }
        }

        return response()->json(['error' => '0', 'mensagem' => 'Não foi possível carregar as peças']);
    }

    public function PostForm()
    {
        function formataTelefone($numero)
        {
            if (strlen($numero) == 10) {
                $novo = substr_replace($numero, '(', 0, 0);
//            $novo = substr_replace($novo, '9', 3, 0);
                $novo = substr_replace($novo, ')', 3, 0);
            } else {
                $novo = substr_replace($numero, '(', 0, 0);
                $novo = substr_replace($novo, ')', 3, 0);
            }
            return $novo;
        }

        $postdata = file_get_contents("php://input");

        if (isset($postdata)) {

            $request = json_decode($postdata);
            $assunto = 'Promoção do dia dos namorados - Cheque Teatro';

            $fields = array(
                'nome' => urlencode($request->nome),
                'email' => urlencode($request->email),
                'assunto' => urlencode($assunto),
                'telefone' => urlencode(formataTelefone($request->tel)),
                'promocao' => urlencode($request->promocao),
                '_wpcf7' => urlencode('8056'),
                '_wpcf7_unit_tag' => urlencode('wpcf7-f8056-p8057-o1'),
                '_wpnonce' => urlencode('bac61017b6')
            );
        }

        foreach ($fields as $key => $value) {
            $post_items[] = $key . '=' . $value;
        }

        //create the final string to be posted using implode()
        $post_string = implode('&', $post_items);

        //create cURL connection
        $curl_connection =
            $this->getcurl(env('URL_API') .'/api/?json=get_page&slug=form#wpcf7-f8056-p8057-o1');

        //set options
        curl_setopt($curl_connection, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($curl_connection, CURLOPT_USERAGENT,
            "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)");
        curl_setopt($curl_connection, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl_connection, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl_connection, CURLOPT_FOLLOWLOCATION, 1);

        //set data to be posted
        curl_setopt($curl_connection, CURLOPT_POSTFIELDS, $post_string);

        //perform our request
        $result = curl_exec($curl_connection);

        //show information regarding the request
        print_r(curl_getinfo($curl_connection));
        echo curl_errno($curl_connection) . '-' .
            curl_error($curl_connection);

        //close the connection
        curl_close($curl_connection);


    }

    public function getDadosForm()
    {
        $dados = array('head_app' => 'Promoção dia dos namorados','visivel' => true);

        return response()->json($dados);
    }



}
