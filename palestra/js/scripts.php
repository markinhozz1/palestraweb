<script type="text/javascript">     
      $(document).ready(function(){       
         $("select[name=id_eixo]").change(function(){
            $("select[name=nome_curso]").html('<option value="0">Carregando...</option>');             
            $.post("cursos/cursos.php",
                  {id_eixo:$(this).val()},
                  function(valor){
                     $("select[name=nome_curso]").html(valor);
                  }
                  )            
         })
      })       
</script>

<script type="text/javascript">     
      $(document).ready(function(){       
         $("select[name=id_comarca]").change(function(){
            $("select[name=id_unidade]").html('<option value="0">Carregando...</option>');             
            $.post("cursos/unidade.php",
                  {id_comarca:$(this).val()},
                  function(valor){
                     $("select[name=id_unidade]").html(valor);
                  }
                  )            
         })
      })       
</script>

<script type="text/javascript">     
      $(document).ready(function(){       
         $("select[name=id_unidade]").change(function(){
            $("select[name=id_gerencia]").html('<option value="0">Carregando...</option>');             
            $.post("cursos/gerencia.php",
                  {id_unidade:$(this).val()},
                  function(valor){
                     $("select[name=id_gerencia]").html(valor);
                  }
                  )            
         })
      })       
</script>
