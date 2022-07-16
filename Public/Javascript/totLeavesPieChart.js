var xValues = ["Annual", "Casual", "Maternity", "No-Pay"];
var yValues = [document.getElementById('Annual').value, document.getElementById('Casual').value, document.getElementById('Maternity').value, document.getElementById('No_Pay').value];
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145"
];

new Chart("myChart", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
    //   text: "World Wide Wine Production 2018"
    }
  }
});