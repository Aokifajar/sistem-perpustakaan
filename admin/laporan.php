<section class="portfolio" id="portfolio">
    <div class="container-fluid">
    <div class="col-md-12" style="box-shadow:0px 2px 2px 2px rgba(0,0,0,0.15);border-radius: 5px; ">
      <br>
      <h2><font face="verdana">Laporan</font></h2>
      <hr>
      <div class="col-md-8">
      <form method="POST" action="report.php" target="_blank" >  
        <label class="col-sm-2 control-label">Star Date</label>
          <input type="date"  name="from" id="stayf" value="<?php echo date('Y-m-d'); ?>" 
          class="form-control" style="height: 50px;width:500px;border:1px solid #999"><br>
          <label class="col-sm-2 control-label">End Date</label>
          <input type="date" name="end" id="stayf" value="<?php echo date('Y-m-d'); ?>" 
          class="form-control" style="height: 50px;width:500px;border:1px solid #999"><br>
            
          <br>
          <button class="btn btn-primary btn-lg"type="submit" name="submit" value="proses"  onclick="return valid();">Lihat Laporan</button>
        </form>
      </div>
      <br><br>
    </div>
  </div>
</section>