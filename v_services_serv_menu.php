<div class="foruser_account">
  <?if($controller=='services/services/'):?>
   <div class="foruser_account_btn">Я  могу предложить</div>
  <?else:?>
  <?= HTML::anchor("services/services/", "Я могу предложить", array('class'=>'btn btn-primary linknone'))?>
  <?endif?>
     
  <?if($controller=='services/services/needs'):?>
   <div class="foruser_account_btn">Нуждаюсь</div>
  <?else:?>
  <?= HTML::anchor("services/services/needs", "Нуждаюсь", array('class'=>'btn btn-primary linknone'))?>
  <?endif?>
 </div>