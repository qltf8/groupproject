<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <style>
	select:hover{
  		height:200px;
  	}
  </style>
  <title>Chosen: A jQuery Plugin by Harvest to Tame Unwieldy Select Boxes</title>
  <link rel="stylesheet" href="<?=base_url('docsupport/style.css')?>">;
  <link rel="stylesheet" href="<?=base_url('docsupport/prism.css')?>">
  <link rel="stylesheet" href="<?=base_url('chosen.css')?>">

</head>
<body>
    <div id="container">
      <div id="content">
		<?php echo form_open('index.php/test/show'); ?>
          <em>Multiple Select with Groups</em>
          <select name="course[]" data-placeholder="Your Favorite Football Team" style="width:350px;" class="chosen-select" id="select" multiple tabindex="6">
        	<?php foreach($course as $val):?>
        		<?php $dept=$val['deptment'];?>
        		 <optgroup label="<?=$dept?>">
        		 	<?php foreach($$dept as $name):?>
        		 		<option><?=$name['courseName']?></option>
        		 	<?php endforeach;?>
        		 </optgroup>
          	<?php endforeach;?>
          </select>
          <input type="submit" value="Submit" />
           </form>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
  <script type="text/javascript">
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
  </script>

</body>
</html>
