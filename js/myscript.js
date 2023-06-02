function updateTime() {
  var date = new Date();
  var hours = date.getHours();
  var minutes = date.getMinutes();
  var seconds = date.getSeconds();

  hours = (hours < 10) ? "0" + hours : hours;
  minutes = (minutes < 10) ? "0" + minutes : minutes;
  seconds = (seconds < 10) ? "0" + seconds : seconds;

  var time = hours + "時 " + minutes + "分 " + seconds + "秒 ";

  document.getElementById("time").textContent = "現在の時刻は" + time + "です";
}

setInterval(updateTime, 1000);






