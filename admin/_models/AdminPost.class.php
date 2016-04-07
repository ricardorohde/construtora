<?php

/**
 * AdminPost.class.php [ Post ]
 * Descrição: Faz o cadastro, upload e delet do post
 * 
 * @copyright (c) 2016, Nathã G. Longhi
 */
class AdminPost {

    private $Data;
    private $Post;
    private $Error;
    private $Result;

    //Nome da tabela no banco de dados
    const Entity = 'produto';

    /**
     * <b>Cadastrar o Post:</b> Envelope os dados do post em um array atribuitivo e execute esse método
     * para cadastrar o post. Envia a capa automaticamente!
     * @param ARRAY $Data = Atribuitivo
     */
    public function ExeCreate(array $Data) {
        $this->Data = $Data;

        //olha se os campost estão em branco
        if (in_array('', $this->Data)) {
            $this->Error = ["Erro ao cadastrar: Para criar um post, favor preencha todos os campos!", WS_ALERT];
            $this->Result = false;
        } else {
            if ($this->Data['category_parent'] == 'null') {
                $this->Error = ["Erro ao cadastrar: Selecione uma categoria!", WS_ALERT];
                $this->Result = false;
            } else {
                if ($this->Data['post_principal'] || $this->Data['post_foto2'] || $this->Data['post_foto3'] || $this->Data['post_foto4'] || $this->Data['post_foto5']) {
                    $uplaod = new Upload;
                    $uplaod->Image($this->Data['post_principal']);
                    $uplaod2 = new Upload;
                    $uplaod2->Image($this->Data['post_foto2']);
                    $uplaod3 = new Upload;
                    $uplaod3->Image($this->Data['post_foto3']);
                    $uplaod4 = new Upload;
                    $uplaod4->Image($this->Data['post_foto4']);
                    $uplaod5 = new Upload;
                    $uplaod5->Image($this->Data['post_foto5']);
                }

                if (isset($uplaod) && $uplaod->getResult()) {
                    $this->Data['post_principal'] = $uplaod->getResult();
                    $this->Data['post_foto2'] = $uplaod2->getResult();
                    $this->Data['post_foto3'] = $uplaod3->getResult();
                    $this->Data['post_foto4'] = $uplaod4->getResult();
                    $this->Data['post_foto5'] = $uplaod5->getResult();
                    $this->Create();
                } else {
                    $this->Data['post_principal'] = null;
                    $this->Data['post_foto2'] = null;
                    $this->Data['post_foto3'] = null;
                    $this->Data['post_foto4'] = null;
                    $this->Data['post_foto5'] = null;
                    $this->Create();
                }
            }
        }
    }

    /**
     * <b>Atualizar Post:</b> Envelope os dados em uma array atribuitivo e informe o id de um 
     * post para atualiza-lo na tabela!
     * @param INT $PostId = Id do post
     * @param ARRAY $Data = Atribuitivo
     */
    public function ExeUpdate($PostId, array $Data) {


        $this->Post = (int) $PostId;
        $this->Data = $Data;

        if (in_array('', $this->Data)) {
            $this->Error = ["Para atualizar este post, preencha todos os campos ( Foto não precisa ser enviada! )", WS_ALERT];
            $this->Result = false;
        } else {
            if ($this->Data['category_parent'] == 'null') {
                $this->Error = ["Erro ao cadastrar: Selecione uma categoria!", WS_ALERT];
                $this->Result = false;
            } else {
                if ($this->Data['post_principal'] != 'null') {
                    $fotoPrin = new Read();
                    $fotoPrin->ExeRead(self::Entity, "WHERE id = :post", "post={$this->Post}");
                    $capa = '../uploads/' . $fotoPrin->getResult()[0]['post_principal'];
                    if (file_exists($capa) && !is_dir($capa)) {
                        unlink($capa);
                    }
                    $uploadFoto = new Upload;
                    $uploadFoto->Image($this->Data['post_principal']);
                    $this->Data['post_principal'] = $uploadFoto->getResult();
                } else {
                    unset($this->Data['post_principal']);
                }
                if ($this->Data['post_foto2'] != 'null') {
                    $fotoPrin = new Read;
                    $fotoPrin->ExeRead("produto", "WHERE id = :id", "id={$PostId}");
                    $capa = '../uploads/' . $fotoPrin->getResult()[0]['post_foto2'];
                    if (file_exists($capa) && !is_dir($capa)) {
                        unlink($capa);
                    }
                    $uploadFoto2 = new Upload;
                    $uploadFoto2->Image($this->Data['post_foto2']);
                    $this->Data['post_foto2'] = $uploadFoto2->getResult();
                } else {
                    unset($this->Data['post_foto2']);
                }
                if ($this->Data['post_foto3'] != 'null') {
                    $fotoPrin = new Read;
                    $fotoPrin->ExeRead(self::Entity, "WHERE id = :post", "post={$this->Post}");
                    $capa = '../uploads/' . $fotoPrin->getResult()[0]['post_foto3'];
                    if (file_exists($capa) && !is_dir($capa)) {
                        unlink($capa);
                    }
                    $uploadFoto3 = new Upload;
                    $uploadFoto3->Image($this->Data['post_foto3']);
                    $this->Data['post_foto3'] = $uploadFoto3->getResult();
                } else {
                    unset($this->Data['post_foto3']);
                }
                if ($this->Data['post_foto4'] != 'null') {
                    $fotoPrin = new Read;
                    $fotoPrin->ExeRead(self::Entity, "WHERE id = :post", "post={$this->Post}");
                    $capa = '../uploads/' . $fotoPrin->getResult()[0]['post_foto4'];
                    if (file_exists($capa) && !is_dir($capa)) {
                        unlink($capa);
                    }
                    $uploadFoto4 = new Upload;
                    $uploadFoto4->Image($this->Data['post_foto4']);
                    $this->Data['post_foto4'] = $uploadFoto4->getResult();
                } else {
                    unset($this->Data['post_foto4']);
                }
                if ($this->Data['post_foto5'] != 'null') {
                    $fotoPrin = new Read;
                    $fotoPrin->ExeRead(self::Entity, "WHERE id = :post", "post={$this->Post}");
                    $capa = '../uploads/' . $fotoPrin->getResult()[0]['post_foto5'];
                    if (file_exists($capa) && !is_dir($capa)) {
                        unlink($capa);
                    }
                    $uploadFoto5 = new Upload;
                    $uploadFoto5->Image($this->Data['post_foto5']);
                    $this->Data['post_foto5'] = $uploadFoto5->getResult();
                } else {
                    unset($this->Data['post_foto5']);
                }
                $this->Update();
            }
        }
    }

    /**
     * <b>Deleta Post:</b> Informe o ID do post a ser removido para que esse método realize uma checagem de
     * pastas e galerias excluinto todos os dados nessesários!
     * @param INT $PostId = Id do post
     */
    public function ExeDelete($PostId) {
        $this->Post = (int) $PostId;

        $ReadPost = new Read;
        $ReadPost->ExeRead(self::Entity, "WHERE id = :post", "post={$this->Post}");

        if (!$ReadPost->getResult()):
            $this->Error = ["O post que você tentou deletar não existe no sistema!", WS_ERROR];
            $this->Result = false;
        else:
            $fotoPrin = new Read;
            $fotoPrin->ExeRead(self::Entity, "WHERE id = :post", "post={$this->Post}");
            $capa = '../uploads/' . $fotoPrin->getResult()[0]['post_principal'];
            if (file_exists($capa) && !is_dir($capa)) {
                unlink($capa);
            }
            $fotoFoto2 = new Read;
            $fotoFoto2->ExeRead(self::Entity, "WHERE id = :post", "post={$this->Post}");
            $capa2 = '../uploads/' . $fotoFoto2->getResult()[0]['post_foto2'];
            if (file_exists($capa2) && !is_dir($capa2)) {
                unlink($capa2);
            }
            $fotoFoto3 = new Read;
            $fotoFoto3->ExeRead(self::Entity, "WHERE id = :post", "post={$this->Post}");
            $capa3 = '../uploads/' . $fotoFoto3->getResult()[0]['post_foto3'];
            if (file_exists($capa3) && !is_dir($capa3)) {
                unlink($capa3);
            }
            $fotoFoto4 = new Read;
            $fotoFoto4->ExeRead(self::Entity, "WHERE id = :post", "post={$this->Post}");
            $capa4 = '../uploads/' . $fotoFoto2->getResult()[0]['post_foto4'];
            if (file_exists($capa4) && !is_dir($capa4)) {
                unlink($capa4);
            }
            $fotoFoto5 = new Read;
            $fotoFoto5->ExeRead(self::Entity, "WHERE id = :post", "post={$this->Post}");
            $capa5 = '../uploads/' . $fotoFoto5->getResult()[0]['post_foto5'];
            if (file_exists($capa5) && !is_dir($capa5)) {
                unlink($capa5);
            }



            $deleta = new Delete;
            $deleta->ExeDelete(self::Entity, "WHERE id = :id", "id={$this->Post}");

            $this->Error = ["O post foi removido com sucesso do sistema!", WS_ACCEPT];
            $this->Result = true;

        endif;
    }

    function getResult() {
        return $this->Result;
    }

    function getError() {
        return $this->Error;
    }

    private function Create() {
        $cadastra = new Create;
        $this->Data['category_date'] = date('Y-m-d H:i:s');
        $cadastra->ExeCreate(self::Entity, $this->Data);

        if ($cadastra->getResult()) {
            $this->Error = ["O post {$this->Data['post_title']} foi cadastrado com sucesso no sistema!", WS_ACCEPT];
            $this->Result = $cadastra->getResult();
        } else {
            $this->Error = ["Erro ao cadastrar o produto {$this->Data['post_title']}!", WS_ERROR];
        }
    }

    private function Update() {
        $Update = new Update;
        $this->Data['category_date'] = date('Y-m-d H:i:s');
        $Update->ExeUpdate(self::Entity, $this->Data, "WHERE id = :id", "id={$this->Post}");
        if ($Update->getResult()) {
            $this->Error = ["O post <b>{$this->Data['post_title']}</b> foi atualizado com sucesso no sistema!", WS_ACCEPT];
            $this->Result = true;
        } else {
            $this->Error = ["Erro ao atualizar o produto {$this->Data['post_title']}!", WS_ERROR];
        }
    }

}
