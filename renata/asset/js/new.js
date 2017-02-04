const CHART = document.getElementById("myChart");
var myChart = new Chart(CHART,{
    type: 'pie',
    data: data = {
        labels: ["Staff Delegation", "AAP", "DCC", "Council"],
        datasets: 
        [{
            data: [77, 11, 8.5, 3.5],
            backgroundColor: [
                "#3580BE",
                "#E94699",
                "#5B5B95",
                "#00BADA" 
            ],

            hoverBackgroundColor: [
                "#3580BE",
                "#E94699",
                "#5B5B95",
                "#00BADA"
            ]
        }]
	}
});

const CHART2 = document.getElementById("myChart2");
var myChart2 = new Chart(CHART2,{
    type: 'pie',
    data: data = {
        labels: ["Staff Delegation", "AAP", "DCC", "Council"],
        datasets: 
        [{
            data: [77, 11, 8.5, 3.5],
            backgroundColor: [
                "#3580BE",
                "#E94699",
                "#5B5B95",
                "#00BADA" 
            ],

            hoverBackgroundColor: [
                "#3580BE",
                "#E94699",
                "#5B5B95",
                "#00BADA"
            ]
        }]
    }
});
