<?php
/*
Copyright (c) 2012-2013 Luis E. S. Dias - www.smartbyte.com.br

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
"Software"), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*/
?>

<style>
.messageHead {
	display: none;
}
</style>

<script type="text/javascript">
    firstLevel = "<?php echo Router::url('/'); ?>";
	
$(document).ready( function () {
		$("li#admin").addClass("active");
} );
</script>
<?php

?>
<?php echo $this->Html->script(array('https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js')); ?>
<?php echo $this->Html->script('/ReportManager/js/index.js'); ?>

<div class="reportManager index">
<body>
    <h2><?php echo __d('report_manager','Report Manager',true);?></h2>
<div class="row">
	<div class="col-md-5">
        <?php echo '<div id="repoManLeftCol">'; ?>
        <?php echo $this->Form->create('ReportManager'); ?>
        <?php echo '<fieldset>'; ?>
        <?php echo '<legend>' . __d('report_manager','New report',true) . '</legend>'; ?>
        <?php echo $this->Form->input('model',array(
            'type'=>'select',            
            'label'=>__d('report_manager','Model',true),
            'options'=>$models,
            'empty'=>__d('report_manager','--Select--',true)
            )); ?>
        
        <?php echo '<div id="ReportManagerOneToManyOptionSelect">'; ?>
        <?php echo $this->Form->input('one_to_many_option',array(
            'type'=>'select',
            'label'=>__d('report_manager','One to many option',true),
            'options'=>array(),
            'empty'=>__d('report_manager','<None>',true)
            )); ?>
        <?php echo '</div>'; ?>
        <?php echo $this->Form->input('new',array(
            'type'=>'hidden',
            'value'=>'1'
            ));         ?>
        <?php echo '</fieldset>'; ?>
        <?php echo $this->Form->submit(__d('report_manager','New',true),array('name'=>'new','class'=>'repButton')); ?>
        <?php echo $this->Form->end(); ?>
        <?php echo '</div>'; ?>
    </div>
	<div class="col-md-1">
        <?php echo '<div id="repoManMiddleCol">'; ?>
        
        <?php echo $this->Html->tag('h2',__d('report_manager','OR',true)); ?>
        
        <?php echo '</div>'; ?>
    </div>
	<div class="col-md-5">
        <?php echo '<div id="repoManRightCol">'; ?>
        <?php echo $this->Form->create('ReportManager'); ?>
        <?php echo '<fieldset>'; ?>
        <?php echo '<legend>' . __d('report_manager','Load report',true) . '</legend>';         ?>
        
        <?php echo '<div id="ReportManagerSavedReportOptionContainer">'; ?>
        <?php echo $this->Form->input('saved_report_option',array(
            'type'=>'select',
            'label'=>__d('report_manager','Saved reports',true),
            'options'=>$files,
            'empty'=>__d('report_manager','--Select--',true)
            )); ?>
        <?php echo '</div>'; ?>
        <?php echo $this->Form->input('load',array(
            'type'=>'hidden',
            'value'=>'1'
            ));         ?>
        <?php echo '</fieldset>'; ?>
        <?php echo $this->Form->submit(__d('report_manager','Load',true),array('name'=>'load','class'=>'repButton')); ?>
        <?php echo '<button type="button" class="repButton">' . __d('report_manager','Delete',true) . '</button>'; ?>
        <?php echo $this->Form->end(); ?>
        <?php echo '</div>'; ?>
	</div>
</div>
</body>
</div>