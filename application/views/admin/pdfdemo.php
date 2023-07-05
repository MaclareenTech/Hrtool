<form action="<?php echo base_url('pdf/upload'); ?>" method="post" enctype="multipart/form-data">
  <input type="file" name="pdf_file" />
  <input type="submit" value="Upload" />
</form>



<embed src="<?php echo base_url('pdf/view/' . $pdfId); ?>" width="500" height="375" type="application/pdf">
