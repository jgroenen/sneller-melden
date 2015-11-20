<!DOCTYPE html>
<html>
    <head>
        <meta name='viewport' content='width=320,initial-scale=1,user-scalable=0'>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="author" content="Johan Groenen (c) 2015">
        <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
        <style>
            html, body {
                font-size: 100%;
                font-family: Arial;
            }
            h1 {
                text-align: center;
                font-weight: bold;
            }
            button {
                height: 150px;
                width: 150px;
                text-align: center;
                border: 1px solid black;
                background: white;d
                border-radius: 2px;
                vertical-align: top;
                margin: 10px;
                cursor: pointer;
                font-size: 100%;
                font-weight: bold;
            }
            *[data-type=alarm] {
                background: red;
                color: white;
            }
        </style>
    </head>
    <body>
        <h1>&#9776; Sneller melden</h1>
        <main></main>
        <script>
            var types = [
                {
                    "slug": "geluid_horeca",
                    "titel": "Geluid horeca",
                    "afbeelding": ""
                },
                {
                    "slug": "geluid_straat",
                    "titel": "Geluid op straat",
                    "afbeelding": ""
                },
                {
                    "slug": "geluid_taxi",
                    "titel": "Geluid door taxi",
                    "afbeelding": ""
                },
                {
                    "slug": "vervuiling_urine",
                    "titel": "Vervuiling urine",
                    "afbeelding": ""
                },
                {
                    "slug": "vervuiling_overgeef",
                    "titel": "Vervuiling overgeef",
                    "afbeelding": ""
                },
                {
                    "slug": "geweld_ruzie",
                    "titel": "Geweld ruzie",
                    "afbeelding": ""
                },
                {
                    "slug": "geweld_gevecht",
                    "titel": "Geweld gevecht",
                    "afbeelding": ""
                },
                {
                    "slug": "alarm",
                    "titel": "Alarm",
                    "afbeelding": ""
                }
            ];
            $.each(types, function (i, type) {
                $("main").append("<button class='icon' data-type='" + type.slug + "'>" + type.titel + "</button>");
            });
            $("button").click(function () {
                alert("Uw melding is doorgegeven.");
            });
        </script>
    </body>
</html>