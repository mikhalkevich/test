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
    <?=Form::open('services/needs')?>
    <table width="300" cellspacing="5">
        <tr>
            <td>Test</td>
            <td>test</td>
        </tr>
        <tr>
            <td>test</td>
            <td>test</td>
        </tr>
        <tr>
            <td colspan="2"><?=Form::submit('submit', 'Отправить', array('class'=>'btn vhod_in'))?></td>
        </tr>
    </table>
    <?=Form::close()?>
    </div>
    <!--<script type="text/javascript">
        var data = [<?=$data_complite?>];
        $("#skill").autocomplete(data);
    </script> -->
</div>