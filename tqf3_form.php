<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<script type="text/javascript">
	function switchTo(sec_id) {
		for(var i=1;i<=7;i++){
			var f = document.getElementById('sectBt'+i);
       			f.disabled = false;
		}
		if(sec_id!=0){
       		for(var i=1;i<=7;i++){
       			var e = document.getElementById('section'+i);
       			e.style.display = 'none';
      	 	}
      	 	document.getElementById('section'+sec_id).style.display = 'block';
       		document.getElementById('sectBt'+sec_id).disabled = true;
      	 }
      	 else{
      	 	for(var i=1;i<=7;i++){
       			var e = document.getElementById('section'+i);
       			e.style.display = 'block';
      	 	}
      	 	document.getElementById('overallBt').disabled = true;
      	 }
       	
   }
</script>

</head>

<body>
<input type="button" id="sectBt1" value="Section1" onclick="switchTo(1)" disabled="true">
<input type="button" id="sectBt2" value="Section2" onclick="switchTo(2)">
<input type="button" id="sectBt3" value="Section3" onclick="switchTo(3)">
<input type="button" id="sectBt4" value="Section4" onclick="switchTo(4)">
<input type="button" id="sectBt5" value="Section5" onclick="switchTo(5)">
<input type="button" id="sectBt6" value="Section6" onclick="switchTo(6)">
<input type="button" id="sectBt7" value="Section7" onclick="switchTo(7)">
<input type="button" id="saveBT" value="Save" onclick="">
<input type="button" id="overallBt" value="Overall&Confirm" onclick="switchTo(0)">
<form>
<!--****************************************************Section 1 Start*************************************-->
<div id="section1">
<table border="1px" width="60%" cellpadding="5">
<tr><td>
<h1>หมวดที่ 1 ข้อมูลโดยทั่วไป</h1>
</td></tr>

<tr><td>
กรุณาเลือกคณะ<br/>
<select name="faculty">
  <option value="EN">คณะวิศวกรรมศาสตร์</option>
  <option value="BU">คณะบริหารธุรกิจ</option>
  <option value="IT">คณะเทคโนโลยีสารสนเทศ</option>
</select><br/><br/>
</td></tr>

<tr><td>
<h3>1.รหัสวิชาและชื่อรายวิชา</h3>

กรุณาเลือกรายวิชาโดยกดปุ่ม "ค้นหารายวิชา" <br/>
<input type="button" value="ค้นหารายวิชา"><br/><br/>

<h4>รหัสวิชา</h4>
<input type="text" ><br/>
<h4>ชื่อวิชา(ภาษาไทย)</h4> 
<input type="text"><br/>
<h4>ชื่อวิชา(ภาษาอังกฤษ)</h4>
<input type="text"><br/>
</td></tr>

<tr><td>
<h3>2.จำนวนหน่วยกิต</h3>

<input type="text" ><br/>
</td></tr>

<tr><td>
<h3>3.หลักสูตร</h3>
<input type="text" ><br/>
<h3>ประเภทรายวิชา</h3>
<input type="text" ><br/>
</td></tr>


<tr><td>
<h3>4.อาจารย์ผู้รับผิดชอบวิชาและอาจารย์ผู้สอน</h3>
<input type="text" ><br/>
<input type="text" > <input type="button" value="ลบอาจารย์"><br/> 
<input type="button" value="เพิ่มอาจารย์"><br/>
</td></tr>

<tr><td>
<h3>5.ภาคการศึกษา/ชั้นปีที่เรียน</h3>
<input type="text" ><br/>
</td></tr>

<tr><td>
<h3>6.รายวิชาที่ต้องเรียนมาก่อน</h3>
<input type="text" ><br/>
</td></tr>

<tr><td>
<h3>6.รายวิชาที่ต้องเรียนมาก่อน</h3>
<input type="text" ><br/>
</td></tr>

<tr><td>
<h3>7.รายวิชาที่ต้องเรียนพร้อมกัน</h3>
<input type="text" ><br/>
<h3>รายวิชาต่อเนื่อง</h3>
<input type="text" ><br/>
</td></tr>

<tr><td>
<h3>8.สถานที่เรียน</h3>
<input type="text" ><br/>
</td></tr>

<tr><td>
<h3>9.วันที่จัดทำหรือปรับปรุงรายละเอียดของรายวิชาล่าสุด</h3>
<input type="text" ><br/>
</td></tr>
</table>
</div>

<!--****************************************************Section 1 End*************************************-->

<!--****************************************************Section 2 Start*************************************-->
<div id="section2">
<table border="1px" width="60%" cellpadding="5">

<tr><td>
<h1>หมวดที่ 2 จุดมุ่งหมายและวัตถุประสงค์</h1>
</td></tr>

<tr><td>
<h3>1.จุดมุ่งหมาย</h3>
<textarea rows="4" cols="50">
</textarea><br/>
</td></tr>

<tr><td>
<h3>2.วัตถุประสงค์ในการพัฒนาและปรับปรุงรายวิชา</h3>
<textarea rows="4" cols="50">
</textarea><br/>
</td></tr>

</table>
</div>

<!--****************************************************Section 2 End*************************************-->

<!--****************************************************Section 3 Start*************************************-->

<div id="section3">
<table border="1px" width="60%" cellpadding="5">

<tr><td>
<h1>หมวดที่ 3 ลักษณะและการดำเนินการ</h1>
</td></tr>

<tr><td>
<h3>1.คำอธิบายรายวิชา</h3>
<textarea rows="4" cols="50">
</textarea><br/>
</td></tr>

<tr><td>
<h3>2.จำนวนชั่วโมงที่ใช้ต่อภาคการศึกษา</h3>
<h4>บรรยาย</h4>
<input type="text" ><br/>
<h4>สอนเสริม</h4>
<input type="text" ><br/>
<h4>บการฝึกปฏิบัติงาน/งานภาคสนาม/การฝึกงาน</h4>
<input type="text" ><br/>
<h4>การศึกษาด้วยสนเอง</h4>
<input type="text" ><br/>
</td></tr>

<tr><td>
<h3>3.จำนวนชั่วโมงต่อสัปดาห์ที่อาจารย์ให้คำปรึกษาและแนะนำทางวิชาการแก่นกศึกษาเป็นรายบุคคล</h3>
<textarea rows="4" cols="50">
</textarea><br/>
</td></tr>

</table>
</div>

<!--****************************************************Section 3 End*************************************-->

<div id="section4">
</div>

<div id="section5">
</div>

<div id="section6">
</div>

<div id="section7">
</div>

</form>
</body>
</html>