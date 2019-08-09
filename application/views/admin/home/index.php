<?php
//koneksi ke database
$conn = new mysqli("localhost", "root", "", "sumateratrip");
if ($conn->connect_errno) {
echo die("Failed to connect to MySQL: " . $conn->connect_error);
}
$rows = array();
$table = array();
$table['cols'] = array(
//membuat label untuk nama nya, tipe string
array('label' => 'Name', 'type' => 'string'),
//membuat label untuk jumlah siswa, tipe harus number untuk kalkulasi persentasenya
array('label' => 'Price', 'type' => 'number')
);
//melakukan query ke database select
$sql = $conn->query("SELECT * FROM transports");
//perulangan untuk menampilkan data dari database
while($data = $sql->fetch_assoc()){
//membuat array
$temp = array();
//memasukkan data pertama yaitu nama kelasnya
$temp[] = array('v' => (string)$data['name']);
//memasukkan data kedua yaitu jumlah siswanya
$temp[] = array('v' => (int)$data['price']);
//memasukkan data diatas ke dalam array $rows
$rows[] = array('c' => $temp);
}
//memasukkan array $rows dalam variabel $table
$table['rows'] = $rows;
//mengeluarkan data dengan json_encode. silahkan di echo kalau ingin menampilkan data nya
$jsonTable = json_encode($table);
?>

<script type="text/javascript"
src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">

google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
// membuat data chart dari json yang sudah ada di atas
var data = new google.visualization.DataTable(<?php echo

$jsonTable; ?>);

// Set options, bisa anda rubah
var options = {'title':'Data Transports',
'width':300,
'height':200};

var chart = new

google.visualization.PieChart(document.getElementById('chart_div'));

chart.draw(data, options);
}
</script>

<?php
//koneksi ke database
$conn = new mysqli("localhost", "root", "", "sumateratrip");
if ($conn->connect_errno) {
echo die("Failed to connect to MySQL: " . $conn->connect_error);
}
$rows = array();
$table = array();
$table['cols'] = array(
//membuat label untuk nama nya, tipe string
array('label' => 'Destination', 'type' => 'string'),
//membuat label untuk jumlah siswa, tipe harus number untuk kalkulasi persentasenya
array('label' => 'Price', 'type' => 'number')
);
//melakukan query ke database select
$sql = $conn->query("SELECT * FROM vacation");
//perulangan untuk menampilkan data dari database
while($data = $sql->fetch_assoc()){
//membuat array
$temp = array();
//memasukkan data pertama yaitu nama kelasnya
$temp[] = array('v' => (string)$data['destination']);
//memasukkan data kedua yaitu jumlah siswanya
$temp[] = array('v' => (int)$data['price']);
//memasukkan data diatas ke dalam array $rows
$rows[] = array('c' => $temp);
}
//memasukkan array $rows dalam variabel $table
$table['rows'] = $rows;
//mengeluarkan data dengan json_encode. silahkan di echo kalau ingin menampilkan data nya
$jsonTable = json_encode($table);
?>

<script type="text/javascript"
src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">

google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
// membuat data chart dari json yang sudah ada di atas
var data = new google.visualization.DataTable(<?php echo

$jsonTable; ?>);

// Set options, bisa anda rubah
var options = {'title':'Data Vacation',
'width':300,
'height':200};

var chart = new

google.visualization.ComboChart(document.getElementById('chart2_div'));

chart.draw(data, options);
}
</script>

<?php
//koneksi ke database
$conn = new mysqli("localhost", "root", "", "sumateratrip");
if ($conn->connect_errno) {
echo die("Failed to connect to MySQL: " . $conn->connect_error);
}
$rows = array();
$table = array();
$table['cols'] = array(
//membuat label untuk nama nya, tipe string
array('label' => 'Hotels', 'type' => 'string'),
//membuat label untuk jumlah siswa, tipe harus number untuk kalkulasi persentasenya
array('label' => 'Price', 'type' => 'number')
);
//melakukan query ke database select
$sql = $conn->query("SELECT * FROM hotels");
//perulangan untuk menampilkan data dari database
while($data = $sql->fetch_assoc()){
//membuat array
$temp = array();
//memasukkan data pertama yaitu nama kelasnya
$temp[] = array('v' => (string)$data['name']);
//memasukkan data kedua yaitu jumlah siswanya
$temp[] = array('v' => (int)$data['price']);
//memasukkan data diatas ke dalam array $rows
$rows[] = array('c' => $temp);
}
//memasukkan array $rows dalam variabel $table
$table['rows'] = $rows;
//mengeluarkan data dengan json_encode. silahkan di echo kalau ingin menampilkan data nya
$jsonTable = json_encode($table);
?>

<script type="text/javascript"
src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">

google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
// membuat data chart dari json yang sudah ada di atas
var data = new google.visualization.DataTable(<?php echo

$jsonTable; ?>);

// Set options, bisa anda rubah
var options = {'title':'Data Hotels',
'width':300,
'height':200};

var chart = new

google.visualization.Histogram(document.getElementById('chart3_div'));

chart.draw(data, options);
}
</script>

<?php
//koneksi ke database
$conn = new mysqli("localhost", "root", "", "sumateratrip");
if ($conn->connect_errno) {
echo die("Failed to connect to MySQL: " . $conn->connect_error);
}
$rows = array();
$table = array();
$table['cols'] = array(
//membuat label untuk nama nya, tipe string
array('label' => 'Name', 'type' => 'string'),
//membuat label untuk jumlah siswa, tipe harus number untuk kalkulasi persentasenya
array('label' => 'Price', 'type' => 'number')
);
//melakukan query ke database select
$sql = $conn->query("SELECT * FROM tour");
//perulangan untuk menampilkan data dari database
while($data = $sql->fetch_assoc()){
//membuat array
$temp = array();
//memasukkan data pertama yaitu nama kelasnya
$temp[] = array('v' => (string)$data['name']);
//memasukkan data kedua yaitu jumlah siswanya
$temp[] = array('v' => (int)$data['price']);
//memasukkan data diatas ke dalam array $rows
$rows[] = array('c' => $temp);
}
//memasukkan array $rows dalam variabel $table
$table['rows'] = $rows;
//mengeluarkan data dengan json_encode. silahkan di echo kalau ingin menampilkan data nya
$jsonTable = json_encode($table);
?>

<script type="text/javascript"
src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">

google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
// membuat data chart dari json yang sudah ada di atas
var data = new google.visualization.DataTable(<?php echo

$jsonTable; ?>);

// Set options, bisa anda rubah
var options = {'title':'Data Tour Guide',
'width':300,
'height':200};

var chart = new

google.visualization.LineChart(document.getElementById('chart4_div'));

chart.draw(data, options);
}
</script>

<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <nav class="d-none d-md-inline-block ml-md-4" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
                </ol>
              </nav>
            </div>
          </div>
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-md-4">
              <div class="card card-stats">
              <div id="chart_div"></div>
              </div>
            </div>
            <div class="col-xl-3 col-md-4">
              <div class="card card-stats">
              <div id="chart2_div"></div>
              </div>
            </div>
            <div class="col-xl-3 col-md-4">
              <div class="card card-stats">
              <div id="chart3_div"></div>
              </div>
            </div>
            <div class="col-xl-3 col-md-4">
              <div class="card card-stats">
              <div id="chart4_div"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>