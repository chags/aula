<?php
  
/*************************************************************************************************************** 
* @author William F. Leite                                                                                     *  
* Data: 20/06/2014                                                                                             *
* Título: CRUD genérico                                                                                        *  
* Descrição: A Classe de CRUD genérico foi elaborada com o objetivo de auxlilar nas operações CRUDs em diversos* 
* SGBDS, possui funcionalidades para construir instruções de INSERT, UPDATE E DELETE onde as mesmas podem ser  *
* executadas nos principais SGBDs, exemplo SQL Server, MySQL e Firebird. Instruções SELECT são recebidas       *
* integralmente via parâmetro.                                                                                 *  
*************************************************************************************************************/  
 
header('Content-Type: text/html; charset=utf-8');  
 
class Crud{   
   
  // Atributo para guardar uma conexão PDO   
  private $pdo = null;   
   
  // Atributo onde será guardado o nome da tabela    
  private $tabela = null;   
   
  // Atributo estático que contém uma instância da própria classe   
  private static $crud = null;   
     
  /*   
  * Método privado construtor da classe    
  * @param $conexao = Conexão PDO configurada   
  * @param $tabela = Nome da tabela    
  */   
  private function __construct($conexao, $tabela=NULL){   
       
    if (!empty($conexao)):  
      $this->pdo = $conexao;   
    else:  
      echo "<h3>Conexão inexistente!</h3>";  
      exit();  
    endif;   
       
    if (!empty($tabela)) $this->tabela =$tabela;   
  }   
   
  /*    
  * Método público estático que retorna uma instância da classe Crud    
  * @param $conexao = Conexão PDO configurada   
  * @param $tabela = Nome da tabela   
  * @return Atributo contendo instância da classe Crud   
  */   
  public static function getInstance($conexao, $tabela=NULL){   
    
    // Verifica se existe uma instância da classe   
    if(!isset(self::$crud)):   
       try {   
         self::$crud = new Crud($conexao, $tabela);   
       } catch (Exception $e) {   
         echo "Erro " . $e->getMessage();   
       }   
    endif;   
    
    return self::$crud;   
  }   
 
  /*  
  * Método para setar o nome da tabela na propriedade $tabela  
  * @param $tabela = String contendo o nome da tabela  
  */   
  public function setTableName($tabela){  
    if(!empty($tabela)){  
      $this->tabela = $tabela;  
    }  
  }  
   
  /*   
  * Método privado para construção da instrução SQL de INSERT   
  * @param $arrayDados = Array de dados contendo colunas e valores   
  * @return String contendo instrução SQL   
  */    
  private function buildInsert($arrayDados){   
   
      // Inicializa variáveis   
      $sql = "";   
      $campos = "";   
      $valores = "";   
             
      // Loop para montar a instrução com os campos e valores   
      foreach($arrayDados as $chave => $valor):   
         $campos .= $chave . ', ';   
         $valores .= '?, ';   
      endforeach;   
             
      // Retira vírgula do final da string   
      $campos = (substr($campos, -2) == ', ') ? trim(substr($campos, 0, (strlen($campos) - 2))) : $campos ;    
             
      // Retira vírgula do final da string   
      $valores = (substr($valores, -2) == ', ') ? trim(substr($valores, 0, (strlen($valores) - 2))) : $valores ;    
             
      // Concatena todas as variáveis e finaliza a instrução   
      $sql .= "INSERT INTO {$this->tabela} (" . $campos . ")VALUES(" . $valores . ")";   
             
      // Retorna string com instrução SQL   
      return trim($sql);   
  }   
   
  /*   
  * Método privado para construção da instrução SQL de UPDATE   
  * @param $arrayDados = Array de dados contendo colunas, operadores e valores   
  * @param $arrayCondicao = Array de dados contendo colunas e valores para condição WHERE   
  * @return String contendo instrução SQL   
  */    
  private function buildUpdate($arrayDados, $arrayCondicao){   
   
      // Inicializa variáveis   
      $sql = "";   
      $valCampos = "";   
      $valCondicao = "";   
             
      // Loop para montar a instrução com os campos e valores   
      foreach($arrayDados as $chave => $valor):   
         $valCampos .= $chave . '=?, ';   
      endforeach;   
             
      // Loop para montar a condição WHERE   
      foreach($arrayCondicao as $chave => $valor):   
         $valCondicao .= $chave . '? AND ';   
      endforeach;   
             
      // Retira vírgula do final da string   
      $valCampos = (substr($valCampos, -2) == ', ') ? trim(substr($valCampos, 0, (strlen($valCampos) - 2))) : $valCampos ;    
             
      // Retira vírgula do final da string   
      $valCondicao = (substr($valCondicao, -4) == 'AND ') ? trim(substr($valCondicao, 0, (strlen($valCondicao) - 4))) : $valCondicao ;    
             
       // Concatena todas as variáveis e finaliza a instrução   
       $sql .= "UPDATE {$this->tabela} SET " . $valCampos . " WHERE " . $valCondicao;   
             
       // Retorna string com instrução SQL   
       return trim($sql);   
  }   
   
  /*   
  * Método privado para construção da instrução SQL de DELETE   
  * @param $arrayCondicao = Array de dados contendo colunas, operadores e valores para condição WHERE   
  * @return String contendo instrução SQL   
  */    
  private function buildDelete($arrayCondicao){   
   
       // Inicializa variáveis   
       $sql = "";   
       $valCampos= "";   
             
       // Loop para montar a instrução com os campos e valores   
       foreach($arrayCondicao as $chave => $valor):   
          $valCampos .= $chave . '? AND ';   
       endforeach;   
             
       // Retira a palavra AND do final da string   
       $valCampos = (substr($valCampos, -4) == 'AND ') ? trim(substr($valCampos, 0, (strlen($valCampos) - 4))) : $valCampos ;    
             
       // Concatena todas as variáveis e finaliza a instrução   
       $sql .= "DELETE FROM {$this->tabela} WHERE " . $valCampos;   
             
       // Retorna string com instrução SQL   
       return trim($sql);   
  }   
   
  /*   
  * Método público para inserir os dados na tabela   
  * @param $arrayDados = Array de dados contendo colunas e valores   
  * @return Retorna resultado booleano da instrução SQL   
  */   
  public function insert($arrayDados){   
     try {   
   
       // Atribui a instrução SQL construida no método   
       $sql = $this->buildInsert($arrayDados);   
   
       // Passa a instrução para o PDO   
       $stm = $this->pdo->prepare($sql);   
   
       // Loop para passar os dados como parâmetro   
       $cont = 1;   
             foreach ($arrayDados as $valor):   
                   $stm->bindValue($cont, $valor);   
                   $cont++;   
             endforeach;   
   
       // Executa a instrução SQL e captura o retorno   
       $retorno = $stm->execute();   
   
       return $retorno;   
          
     } catch (PDOException $e) {   
       echo "Erro: " . $e->getMessage();   
     }   
  }   
   
  /*   
  * Método público para atualizar os dados na tabela   
  * @param $arrayDados = Array de dados contendo colunas e valores   
  * @param $arrayCondicao = Array de dados contendo colunas e valores para condição WHERE - Exemplo array('$id='=>1)   
  * @return Retorna resultado booleano da instrução SQL   
  */   
  public function update($arrayDados, $arrayCondicao){   
     try {   
   
       // Atribui a instrução SQL construida no método   
       $sql = $this->buildUpdate($arrayDados, $arrayCondicao);   
   
       // Passa a instrução para o PDO   
       $stm = $this->pdo->prepare($sql);   
   
       // Loop para passar os dados como parâmetro   
       $cont = 1;   
       foreach ($arrayDados as $valor):   
           $stm->bindValue($cont, $valor);   
           $cont++;   
       endforeach;   
             
       // Loop para passar os dados como parâmetro cláusula WHERE   
       foreach ($arrayCondicao as $valor):   
           $stm->bindValue($cont, $valor);   
           $cont++;   
       endforeach;   
   
       // Executa a instrução SQL e captura o retorno   
       $retorno = $stm->execute();   
   
       return $retorno;   
          
     } catch (PDOException $e) {   
       echo "Erro: " . $e->getMessage();   
     }   
  }   
   
  /*   
  * Método público para excluir os dados na tabela   
  * @param $arrayCondicao = Array de dados contendo colunas e valores para condição WHERE - Exemplo array('$id='=>1)   
  * @return Retorna resultado booleano da instrução SQL   
  */   
  public function delete($arrayCondicao){   
     try {   
   
       // Atribui a instrução SQL construida no método   
       $sql = $this->buildDelete($arrayCondicao);   
   
       // Passa a instrução para o PDO   
       $stm = $this->pdo->prepare($sql);   
   
             // Loop para passar os dados como parâmetro cláusula WHERE   
             $cont = 1;   
             foreach ($arrayCondicao as $valor):   
               $stm->bindValue($cont, $valor);   
               $cont++;   
             endforeach;   
   
       // Executa a instrução SQL e captura o retorno   
       $retorno = $stm->execute();   
   
       return $retorno;   
          
     } catch (PDOException $e) {   
       echo "Erro: " . $e->getMessage();   
     }   
  }   
 
  /*  
  * Método genérico para executar instruções de consulta independente do nome da tabela passada no _construct  
  * @param $sql = Instrução SQL inteira contendo, nome das tabelas envolvidas, JOINS, WHERE, ORDER BY, GROUP BY e LIMIT  
  * @param $arrayParam = Array contendo somente os parâmetros necessários para clásusla WHERE  
  * @param $fetchAll  = Valor booleano com valor default TRUE indicando que serão retornadas várias linhas, FALSE retorna apenas a primeira linha  
  * @return Retorna array de dados da consulta em forma de objetos  
  */  
  public function getSQLGeneric($sql, $arrayParams=null, $fetchAll=TRUE){  
     try {   
 // <div style="clear:both; margin-top:0em; margin-bottom:1em;"><a href="http://www.devwilliam.com.br/php/exibir-erros-no-php-durante-desenvolvimento" target="_blank" rel="nofollow" class="u0273c14b50b4a34fdec91c42d49cdc60"><!-- INLINE RELATED POSTS 1/3 //--><style> .u0273c14b50b4a34fdec91c42d49cdc60 , .u0273c14b50b4a34fdec91c42d49cdc60 .postImageUrl , .u0273c14b50b4a34fdec91c42d49cdc60 .centered-text-area { min-height: 80px; position: relative; } .u0273c14b50b4a34fdec91c42d49cdc60 , .u0273c14b50b4a34fdec91c42d49cdc60:hover , .u0273c14b50b4a34fdec91c42d49cdc60:visited , .u0273c14b50b4a34fdec91c42d49cdc60:active { border:0!important; } .u0273c14b50b4a34fdec91c42d49cdc60 .clearfix:after { content: ""; display: table; clear: both; } .u0273c14b50b4a34fdec91c42d49cdc60 { display: block; transition: background-color 250ms; webkit-transition: background-color 250ms; width: 100%; opacity: 1; transition: opacity 250ms; webkit-transition: opacity 250ms; background-color: #2980B9; box-shadow: 0 1px 2px rgba(0, 0, 0, 0.17); -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.17); -o-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.17); -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.17); } .u0273c14b50b4a34fdec91c42d49cdc60:active , .u0273c14b50b4a34fdec91c42d49cdc60:hover { opacity: 1; transition: opacity 250ms; webkit-transition: opacity 250ms; background-color: #D35400; } .u0273c14b50b4a34fdec91c42d49cdc60 .centered-text-area { width: 100%; position: relative; } .u0273c14b50b4a34fdec91c42d49cdc60 .ctaText { border-bottom: 0 solid #fff; color: #ECF0F1; font-size: 16px; font-weight: bold; margin: 0; padding: 0; text-decoration: underline; } .u0273c14b50b4a34fdec91c42d49cdc60 .postTitle { color: #FFFFFF; font-size: 16px; font-weight: 600; margin: 0; padding: 0; width: 100%; } .u0273c14b50b4a34fdec91c42d49cdc60 .ctaButton { background-color: #3498DB!important; color: #ECF0F1; border: none; border-radius: 3px; box-shadow: none; font-size: 14px; font-weight: bold; line-height: 26px; moz-border-radius: 3px; text-align: center; text-decoration: none; text-shadow: none; width: 80px; min-height: 80px; background: url(http://www.devwilliam.com.br/wp-content/plugins/intelly-related-posts/assets/images/simple-arrow.png)no-repeat; position: absolute; right: 0; top: 0; } .u0273c14b50b4a34fdec91c42d49cdc60:hover .ctaButton { background-color: #E67E22!important; } .u0273c14b50b4a34fdec91c42d49cdc60 .centered-text { display: table; height: 80px; padding-left: 18px; top: 0; } .u0273c14b50b4a34fdec91c42d49cdc60 .u0273c14b50b4a34fdec91c42d49cdc60-content { display: table-cell; margin: 0; padding: 0; padding-right: 108px; position: relative; vertical-align: middle; width: 100%; } .u0273c14b50b4a34fdec91c42d49cdc60:after { content: ""; display: block; clear: both; } </style><div class="centered-text-area"><div class="centered-text" style="float: left;"><div class="u0273c14b50b4a34fdec91c42d49cdc60-content"><span class="ctaText">Post relacionado:</span>  <span class="postTitle">Exibir erros no PHP durante o desenvolvimento | Dica</span></div></div></div><div class="ctaButton"></div></a></div>    
       // Passa a instrução para o PDO   
       $stm = $this->pdo->prepare($sql);   
   
       // Verifica se existem condições para carregar os parâmetros    
       if (!empty($arrayParams)):   
   
         // Loop para passar os dados como parâmetro cláusula WHERE   
         $cont = 1;   
         foreach ($arrayParams as $valor):   
           $stm->bindValue($cont, $valor);   
           $cont++;   
         endforeach;   
       
       endif;   
   
       // Executa a instrução SQL    
       $stm->execute();   
   
       // Verifica se é necessário retornar várias linhas  
       if($fetchAll):   
         $dados = $stm->fetchAll(PDO::FETCH_OBJ);   
       else:  
         $dados = $stm->fetch(PDO::FETCH_OBJ);   
       endif;  
   
       return $dados;   
          
     } catch (PDOException $e) {   
       echo "Erro: " . $e->getMessage();   
     }   
  }   
}  