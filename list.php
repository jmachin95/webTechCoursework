<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@200&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="list.css">

    </head>
    <body>

    <!-- MAKE SURE TO VALIDATE DATA -->

        <h1>Record Data</h1>

        <p>Click the button to load the data and show the table of records</p>

        <button id="loadData" name="loadData">Load Data</button>

        <div id="recordTable" name="recordTable">

        </div>


        <?php
            $records = array();

            $lines = file("csvfile.csv", FILE_IGNORE_NEW_LINES);
             foreach($lines as $key => $value){
                $records[$key] = str_getcsv($value);
             }
                //TODO: Get the new module's details using HTTP POST parameters

                $title = $_POST["title"];
                $author = $_POST["author"];
                $year = $_POST["year"];
                $journal = $_POST["journal"];
                $doi = $_POST["doi"];
                $school = $_POST["name"];

                

                
                
                //Validating the information by removing spaces, special characters and slashes
                function test_input($data) {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    $data = preg_replace('/[^A-Za-z0-9]/', '', $data);
                    return $data;
                }


                $title = test_input($title);
                $author = test_input($author);
                $year = test_input($year);
                $journal = test_input($journal);
                $doi = test_input($doi);
                $school = test_input($school);


                array_push($records, array(
                    "title" => $title,
                    "author" => $author,
                    "year" => $year,
                    "journal" => $journal,
                    "doi" => $doi,
                    "school" => $school
                ));
            
            $fp = fopen('csvfile.csv', 'w');

            foreach ($records as $fields) {
                fputcsv($fp, $fields);
            }

            
            fclose($fp);

           

            echo '<script type="text/javascript">
                alert("Submission successful");
            </script>'
            
        ?>
    </body>
</html>

<script>
    


    $(document).ready(function(){
        $('#loadData').click(function(){
            $.ajax({
                url:"csvfile.csv",
                dataType:"text",
                success:function(data){
                    var data = data.split(/\r?\n|\r/);
                    var table_data = '<table class="table" border=1 frame=void rules=rows>';
                    var headings = ["Title", "Author", "Year", "Journal", "DOI", "School Name", "Record Link"];
                    for(var count=-1; count < data.length; count++){
                        if(count >= 0){
                            var cell_data = data[count].split(",");
                        }
                        table_data += '<tr>';
                        for(var cell_count = 0; cell_count < headings.length; cell_count++){
                                if(count === -1){
                                    table_data+='<th>'+headings[cell_count]+'<th>';
                                } 
                                else if(headings[cell_count] == "Record Link" && cell_data != ""){
                                    table_data+=`<td><a href=http://www.teach.scam.keele.ac.uk/prin/x5z47/display.php?title=${cell_data[0]}&author=${cell_data[1]}&year=${cell_data[2]}&journal=${cell_data[3]}&doi=${cell_data[4]}&school=${cell_data[5]}>Link</a><td>`
                                }
                                else if(cell_data != "" || undefined){
                                    table_data+='<td>'+cell_data[cell_count]+'<td>';
                                }
                        }

                        table_data += '</tr>';
                    }
                    table_data += '</table>';
                    $('#recordTable').html(table_data);
                }
            })
        })
    })



</script>

