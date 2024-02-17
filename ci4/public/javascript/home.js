function showDateTime() {
    var currentDate = new Date();
    var dateTimeString = 'Current Date and Time: ' + currentDate.toLocaleString(); document.getElementById('dateTime').innerHTML = dateTimeString;
}

window.addEventListener('DOMContentLoaded', (event) => {
    alert('Welcome Aboard! Enjoy my not-so-well developed website!');
});