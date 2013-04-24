<? if(isset($msg)):?>
    <?= '<p>'.$msg.'</p>'?>
<? endif;?>

<?= Form::open("services/ajaxedit", array(
    "method"=>"post",
    "id"=>"edit"
))?>
    <h3>Изменить описание скила <?= $data->skills->skill?></h3>
    <?= Form::textarea('description', $data->description, array(
        'id'=>'description'
    ))?><br />
    <?= Form::hidden('skill_id', $skill_id)?>
    <?= Form::submit('submit', 'Изменить')?>

<?= Form::close()?>