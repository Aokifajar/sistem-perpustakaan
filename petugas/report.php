<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'kominfo');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
// Memanggil file fpdf yang anda tadi simpan di folder htdoc
require('../fpdf/fpdf.php');
{
date_default_timezone_set('Asia/Jakarta');// change according timezone
$currentTime = date( 'd-F-Y h:i:s A', time () );
}

       $pdf = new FPDF('P','mm','A4');
       // membuat halaman baru
       $pdf->AddPage();
       // setting jenis font yang akan digunakan
       $pdf->SetFont('Arial','B',18);
       $pdf->Cell(190,7,'LAPORAN PEMINJAMAN BUKU',0,1,'C');
       $pdf->SetFont('Arial','',6);
       // Insert a logo in the top-left corner at 300 dpi
       $pdf->SetFont('Arial','B',8);
       $pdf->Cell(190,4,'UNIVERSITAS',0,1,'C');
       $pdf->SetFont('Arial','',8);
       $pdf->Ln(5);
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',6);
        $pdf->Cell(10,8,'',0,0,'R');
        $pdf->SetFillColor(210,221,242);
        $pdf->Cell(10,8,'No',1,0,'C','b');
        $pdf->Cell(62.5,8,'nama anggota',1,0,'C','b');
        $pdf->Cell(62.5,8,'Judul Buku',1,0,'C','b');
        $pdf->Cell(35,8,'tanggal',1,0,'C','b');
        $pdf->ln(8);
        $pdf->Cell(10,8,'',0,0,'R');
        $pdf->Cell(10,5,'(1)',1,0,'C','b');
        $pdf->Cell(62.5,5,'(2)',1,0,'C','b');
        $pdf->Cell(62.5,5,'(3)',1,0,'C','b');
        $pdf->Cell(35,5,'(4)',1,1,'C','b');
        $no=1;
        $from=$_POST['from'];
        $end=$_POST['end'];
        // memanggil database
        $query=mysqli_query($con,"SELECT a.id_peminjaman,a.nama_anggota,b.nama_buku,a.tanggal FROM peminjaman a 
        INNER JOIN buku b ON a.id_buku=b.id_buku WHERE (tanggal BETWEEN '$from' AND '$end')");
        while($lihat=mysqli_fetch_array($query)){
            $pdf->Cell(10,8,'',0,0,'R');
            $pdf->Cell(10,5,$no,1,0,'C',0);
            $pdf->Cell(62.5,5,$lihat['nama_anggota'],1,0,'C');
            $pdf->Cell(62.5,5,$lihat['nama_buku'],1,0,'C');
            $pdf->Cell(35,5,$lihat['tanggal'],1,1,'C');
            $no++;
        }
           
    $pdf->Ln(10);
    $pdf->SetFont('Arial','',8);
    $pdf->Cell(10,4,'',0,0,'L');
    $pdf->Cell(135,4,'',0,0,'L');
    $pdf->Cell(80,4,"Serang,".date("d-F-Y"),0,0,'L',0);
    $pdf->Ln(10);
    $pdf->SetFont('Arial','',8);
    $pdf->Cell(145,4,'',0,0,'L');
    $pdf->Cell(80,4,'Petugas',0,0,'L',0);
    $pdf->Ln(20);
    $pdf->SetFont('Arial','',8);
    $pdf->Cell(141,4,'',0,0,'L');
    $pdf->Cell(80,4,'(................................)',0,0,'L',0);

    $pdf->Output('LAPORAN PEMINJAMAN BUKU.pdf','I');
?>