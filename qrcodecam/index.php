<title>QRC System</title>
<script src="ht.js"></script>
<style>
  .result {
    background-color: green;
    color: #fff;
    padding: 20px;
  }

  .row {
    display: flex;
  }

  .table{
    background-image: url("../image/img/bg2.jpg");
    background-repeat: no-repeat;
   border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  height: 90px;
  width: 834px;
   
  }

  .txt{
    padding-top: 5px;
    margin-left: 300px;
    font-family: Arial, Helvetica, sans-serif;
    color: white;
    font-size: 20px;
  }
</style>
<div class="row">
  <div class="col">
    <div style="width:500px;" id="reader"></div>
  </div><audio id="myAudio1">
    <source src="success.mp3" type="audio/ogg">
  </audio>
  <audio id="myAudio2">
    <source src="failes.mp3" type="audio/ogg">
  </audio>
  <script>
    var x = document.getElementById("myAudio1");
    var x2 = document.getElementById("myAudio2");

    function showHint(str) {
      if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = "";
        return;
      } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = this.responseText;
          }
        };
        xmlhttp.open("GET", "gethint.php?q=" + str, true);
        xmlhttp.send();
      }
    }

    function playAudio() {
      x.play();
    }
  </script>
  <div class="col" style="padding:30px;">
    <!--<h4>SCAN RESULT</h4>
    <div>Employee name</div>-->
    <form action="">
      <input type="text" name="start" class="input" id="result" onkeyup="showHint(this.value)" placeholder="result here" readonly="" />
      <div class="table">
      <div id="fullname" class="txt"></div>
      <div id="department" class="txt"></div>
      <div id="level" class="txt"></div>
      <div id="branch" class="txt"></div>
    </div>
    </form>
    <!--<p>Status: <span id="txtHint"></span></p>-->
    <!--<img src="../image/img/bg2.jpg" height='170px' width='1140px' id="txtHint" />-->
  </div>
</div>
<!--azizie-->
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script type="text/javascript">
  function onScanSuccess(qrCodeMessage) {
    document.getElementById("result").value = qrCodeMessage;
    showHint(qrCodeMessage);
    //playAudio(); // aku tutup audio, just disable kalau nak pakai
    showInfoStudent(qrCodeMessage)

  }

  function showInfoStudent(qrCodeMessage) {
    $.ajax({
      type: "GET",
      url: "bacaStudentInfo.php",
      data: {
        student_id: qrCodeMessage
      },
      success: function(data) {
        // alert(data);
        var kotak = data.split("|");
        // alert(kotak[1])
        // document.getElementById("id_matrik").innerHTML = kotak[0];
        document.getElementById("fullname").textContent = kotak[1];
        document.getElementById("department").textContent = kotak[2];
        document.getElementById("level").textContent = kotak[3];
        //document.getElementById("branch").textContent = kotak[4];
      }
    });
  }

  function onScanError(errorMessage) {
    //handle scan error
  }
  var html5QrcodeScanner = new Html5QrcodeScanner(
    "reader", {
      fps: 10,
      qrbox: 250
    });
  html5QrcodeScanner.render(onScanSuccess, onScanError);
</script>
<div>
  <a href="http://localhost/QRCSystem/">back</a>
</div>