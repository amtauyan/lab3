function showDateTime() {
    var currentDate = new Date();
    var dateTimeString = 'Current Date and Time: ' + currentDate.toLocaleString(); document.getElementById('dateTime').innerHTML = dateTimeString;
}
