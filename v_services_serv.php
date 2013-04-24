<div class="mytable_account">
    <?  if(isset($menu)):?>
        <?= $menu?>
    <?  endif;?>
    <div class="maincode">
    <?  if(isset($errors)):?>
        <?  foreach($errors as $error):?>
            <?= "<p style='color:red;'>".$error."</p>"?>
        <?  endforeach;?>
    <?endif;?>
     <div class="list-off-skills">
        <?if(isset($list_off_skills)):?>
         <ul>
            <?foreach($list_off_skills as $list):?>
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" role="button" id="drop2" href="#">
                        <?= $list->skills->skill?> <i class='icon-arrow-down'></i>
                    </a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
                        <li><?= HTML::anchor("services/services/$list->skill_id/delete", "Удалить")?></li>
                        <li><?= HTML::anchor("$list->skill_id", "Редактировать", array("class"=>"edit"))?></li>
                    </ul>
                </li>
            <?endforeach;?>
         </ul>
        <?endif;?>
     </div>
    <?=Form::open('services/services')?>
    <table width="300" cellspacing="5">
        <tr>
            <td ><?=Form::label('skill', 'Я умею *')?></td>
            <td><?=Form::input('skill', $data['skill'], array('id'=>'skill','size' => 20))?></td>
        </tr>
        <tr>
            <td ><?=Form::label('description', 'Описание: ')?></td>
            <td><?=Form::textarea('description', $data['description'], array())?></td>
        </tr>
        <tr>
            <td colspan="2"><?=Form::submit('submit', 'Отправить', array('class'=>'btn vhod_in'))?></td>
        </tr>
    </table>
    <?=Form::close()?>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            var fx = {
                 "initModal" : function(){
                     if($(".modal-window").length == 0){
                         return $("<div>")
                         .addClass("modal-window")
                         .appendTo("body");
                     }
                     else{
                         return $("modal-window");
                     }
                 }
               };
               
           var data = [<?=$data_complite?>];
           $("#skill").autocomplete(data);
           $(".edit").bind("click", function(event){
               event.preventDefault();
               var id = $(".edit").attr("href").replace("<?= Kohana::$base_url?>", "");
               
               var modal = fx.initModal();
               $("<a>").addClass("modal-class-btn")
               .attr("href", "#")
               .html("&times")
               .click(function(){
                   $(".modal-window").remove();
               })
               .appendTo(modal);
               
               $.ajax({
                   type : "POST",
                   url : "<?= Kohana::$base_url?>services/ajaxedit",
                   data : "id="+id,
                   success : function(data){
                       modal.append(data);
                   },
                   error : function(msg){
                       modal.append(msg);
                   } 
               });
           });
        });
    </script>
</div>