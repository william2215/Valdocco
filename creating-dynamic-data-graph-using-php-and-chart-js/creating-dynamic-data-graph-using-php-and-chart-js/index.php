<!DOCTYPE html>
<html>
<head>
<title>Valdocco</title>
<style type="text/css">
BODY {
    width: 550PX;
}

#chart-container {
    width: 100%;
    height: auto;
}
    #shune{
        text-align: center;
    }
</style>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/Chart.min.js"></script>


</head>
<body>
    <div id="chart-container">
        <canvas id="graphCanvas"></canvas>
    </div>
    <div id="chart-container">
        <canvas id="graphCanvas2"></canvas>
    </div>
<table id="shune">
    <td>
    <script>
        $(document).ready(function () {
            showGraph();
        });


        function showGraph()
        {
            {
                $.post("data.php",
                function (data)
                {
                    console.log(data);
                     var name = []; //Columnas de la base de datos
                    var marks = []; //Datos

                    for (var i in data) {
                        name.push(data[i].Clasificacion);
                        marks.push(data[i].Marks);
                    }

                    var chartdata = {
                        labels: name,
                        datasets: [
                            {
                                label: 'Generos',
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: marks
                            }
                        ]
                    };

                    var graphTarget = $("#graphCanvas");

                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata
                    });
                });
            }
        }
        </script>
            <script>
        $(document).ready(function () {
            showGraph2();
        });


        function showGraph2()
        {
            {
                $.post("data2.php",
                function (data2)
                {
                    console.log(data2);
                     var name2 = [];
                    var marks2 = [];

                    for (var i in data2) {
                        name2.push(data2[i].Dowi);
                        marks2.push(data2[i].Marks);
                    }

                    var chartdata2 = {
                        labels: name2,
                        datasets: [
                            {
                                label: 'Deway',
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: marks2
                            }
                        ]
                    };

                    var graphTarget2 = $("#graphCanvas2");

                    var barGraph2 = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata2
                    });
                });
            }
        }
        </script>
    
    </td>
    </table>
</body>
</html>