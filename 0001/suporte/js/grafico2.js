window.onload = function (e) {
    
    var legends = true;
    if (window.frameElement) {
        legends = false;
    }

    var ctx = document.getElementById('myChart').getContext('2d');

    var chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
            datasets: [{
                    label: 'Pais 1',
                    backgroundColor: 'rgb(242, 96, 106)',
                    borderColor: 'rgb(242, 96, 106)',
                    fill: false,
                    data: [0, 1, 4, 6, 8, 1, 2, 0, 1, 3, 0, 1]
                },
                {
                    label: 'Pais 2',
                    backgroundColor: 'rgb(66, 133, 244)',
                    borderColor: 'rgb(66, 133, 244)',
                    fill: false,
                    data: [1, 5, 5, 1, 2, 3, 6, 5, 2, 1, 6, 3]
                },
                {
                    label: 'Pais 3',
                    backgroundColor: 'rgb(255, 219, 40)',
                    borderColor: 'rgb(255, 219, 40)',
                    fill: false,
                    data: [3, 1, 1, 2, 0, 1, 2, 1, 5, 1, 1, 2]
                }]
        },
        // Configuration options go here
        options: {
            elements: {
                line: {
                    tension: 0, // disables bezier curves
                }
            },
            title: {
                text: 'Relatório de vendas'
            },
//            responsive: true,
//            maintainAspectRatio: true,
            scales: {
                xAxes: [{
                        scaleLabel: {
                            display: legends,
                            labelString: 'Mês'
                        },
                        ticks: {
                            beginAtZero: true
                        }
                    }],
                yAxes: [{
                        scaleLabel: {
                            display: legends,
                            labelString: 'Quantidade'
                        },
                        ticks: {
                            beginAtZero: true
                        }
                    }]
            },
        }
    });
}