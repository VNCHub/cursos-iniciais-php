<?php

class MeuFiltro extends php_user_filter // Extende classe de filtros
{
    public $stream;

    public function onCreate() // Cria stream na pasta de temp
    {
        $this->stream = fopen('php://temp', 'w+');
        return $this->stream !== false;
    }

    public function filter($in, $out, &$consumed, $closing) 
    /* Funcao utilizada ao chamar o filtro
        $in = recurso de entrada (contém buckets)
        $out = recurso de saida
        $consumed = quantidade de bytes consumidos
        $closing = se stream está sendo fechado ou não
    */
    {   
        $saida = '';
        while ($bucket = stream_bucket_make_writeable($in)){ // Garante que os buckets cabem na memória
            $linhas = explode("\n", $bucket->data); // Separa bucket por linha

            foreach ($linhas as $linha){
                if(stripos($linha, "ITEM") !== false) { // Filtra linhas com descrição "ITEM"
                    $saida .= "$linha\n"; // Salva na variavel $saida as linhas filtradas
                }
            }
        }
        $bucketSaida = stream_bucket_new($this->stream, $saida); // Cria novo bucket
        stream_bucket_append($out, $bucketSaida); // Atribui a $out o recurso de saida
        return PSFS_PASS_ON;
    }
}