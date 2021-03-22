<h1>Welcome to the View</h1>
<?php
echo "First name: ".$firstname."<br>";
echo "Last name: ".$lastname."<br>";

 ?>
 <img src="<?php echo base_url('app/storage/public/files/').$data['data'] ?>" width="100" height="100" alt="No Image">
 <form id="FormSubmit" enctype="multipart/form-data" method="post">
   <input type="file" name="my_file" value="">
   <input type="submit" name="" value="Submit">
 </form>
<script type="text/javascript">
  $(document).ready(function(){
    $('#FormSubmit').on('submit',function(e){
      e.preventDefault();
      var formData = new FormData($(this)[0]);
      $.ajax({
        url:'<?php echo base_url('fileUpload'); ?>',
        data:formData,
        dataType:'json',
        type:'post',
        async: true,
        cache: false,
        processData: false,
        contentType: false,
        success:function(){

        }
      })
    })
  });
</script>
