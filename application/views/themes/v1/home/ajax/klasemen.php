<div class="border-box">
    <span class="jp-k">KLASEMEN</span>
    <select id="select_league" name="liganya" selected="true" class="slct-lg">
        <option value="indonesia">Liga 1 Indonesia</option>
        <option value="inggris">Liga Inggris</option>
        <option value="spanyol">Liga Spanyol</option>
        <option value="italia">Liga Italia</option>
    </select>
    <div class="border-box pd-l-0">
        <table id="liga_indonesia" class="table table-striped m-b-20">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Klub</th>
                    <th>MN</th>
                    <th>M</th>
                    <th>S</th>
                    <th>K</th>
                    <th>P</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $html = file_get_contents(LinkScrapingLigaIndonesia());
                    $premiere_doc = new DOMDocument();
                    libxml_use_internal_errors(TRUE); //disable libxml errors
                    if(!empty($html)){ //if any html is actually returned
                        $premiere_doc->loadHTML($html);
                        libxml_clear_errors(); //remove errors for yucky html
                        $pokemon_xpath = new DOMXPath($premiere_doc);
                        //get all the h2's with an id
                        $pokemon_row = $pokemon_xpath->query('//tr[@data-team_id]');
                        $pokemon_list = array();
                        $i = 0;
                        if($pokemon_row->length > 0){
                            foreach($pokemon_row as $row){
                                echo "<tr>";
                                if($i < 18){
                                    $types = $pokemon_xpath->query('td', $row);
                                    $n = 0;
                                    foreach($types as $type){
                                        if($type->nodeValue != ""){
                                            if($n != 1){
                                                if($n != 7){
                                                    if($n != 8){
                                                        if($n != 9){
                                                            if($n != 11){
                                                                $nodeValue = "<td>".$type->nodeValue.'</td>';
                                                                echo $nodeValue;
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                        $n++;
                                    }
                                    $i ++;
                                }
                                echo "</tr>";
                            }
                        }
                    } 
                ?>
            </tbody>
        </table>
        <table id="liga_inggris" class="table table-striped m-b-20">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Klub</th>
                    <th>MN</th>
                    <th>M</th>
                    <th>S</th>
                    <th>K</th>
                    <th>P</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $html = file_get_contents(LinkScrapingLigaInggris());
                    $premiere_doc = new DOMDocument();
                    libxml_use_internal_errors(TRUE); //disable libxml errors
                    if(!empty($html)){ //if any html is actually returned
                        $premiere_doc->loadHTML($html);
                        libxml_clear_errors(); //remove errors for yucky html
                        $pokemon_xpath = new DOMXPath($premiere_doc);
                        //get all the h2's with an id
                        $pokemon_row = $pokemon_xpath->query('//tr[@data-team_id]');
                        $pokemon_list = array();
                        $i = 0;
                        if($pokemon_row->length > 0){
                            foreach($pokemon_row as $row){
                                echo "<tr>";
                                if($i < 20){
                                    $types = $pokemon_xpath->query('td', $row);
                                    $n = 0;
                                    foreach($types as $type){
                                        if($type->nodeValue != ""){
                                            if($n != 1){
                                                if($n != 7){
                                                    if($n != 8){
                                                        if($n != 9){
                                                            if($n != 11){
                                                                $nodeValue = "<td>".$type->nodeValue.'</td>';
                                                                echo $nodeValue;
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                        $n++;
                                    }
                                    $i ++;
                                }
                                echo "</tr>";
                            }
                        }
                    } 
                ?>
            </tbody>
        </table>
        <table id="liga_spanyol" class="table table-striped m-b-20">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Klub</th>
                    <th>MN</th>
                    <th>M</th>
                    <th>S</th>
                    <th>K</th>
                    <th>P</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $html = file_get_contents(LinkScrapingLigaSpanyol());
                    $premiere_doc = new DOMDocument();
                    libxml_use_internal_errors(TRUE); //disable libxml errors
                    if(!empty($html)){ //if any html is actually returned
                        $premiere_doc->loadHTML($html);
                        libxml_clear_errors(); //remove errors for yucky html
                        $pokemon_xpath = new DOMXPath($premiere_doc);
                        //get all the h2's with an id
                        $pokemon_row = $pokemon_xpath->query('//tr[@data-team_id]');
                        $pokemon_list = array();
                        $i = 0;
                        if($pokemon_row->length > 0){
                            foreach($pokemon_row as $row){
                                echo "<tr>";
                                if($i < 20){
                                    $types = $pokemon_xpath->query('td', $row);
                                    $n = 0;
                                    foreach($types as $type){
                                        if($type->nodeValue != ""){
                                            if($n != 1){
                                                if($n != 7){
                                                    if($n != 8){
                                                        if($n != 9){
                                                            if($n != 11){
                                                                $nodeValue = "<td>".$type->nodeValue.'</td>';
                                                                echo $nodeValue;
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                        $n++;
                                    }
                                    $i ++;
                                }
                                echo "</tr>";
                            }
                        }
                    } 
                ?>
            </tbody>
        </table>
        <table id="liga_italia" class="table table-striped m-b-20">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Klub</th>
                    <th>MN</th>
                    <th>M</th>
                    <th>S</th>
                    <th>K</th>
                    <th>P</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $html = file_get_contents(LinkScrapingLigaItalia());
                    $premiere_doc = new DOMDocument();
                    libxml_use_internal_errors(TRUE); //disable libxml errors
                    if(!empty($html)){ //if any html is actually returned
                        $premiere_doc->loadHTML($html);
                        libxml_clear_errors(); //remove errors for yucky html
                        $pokemon_xpath = new DOMXPath($premiere_doc);
                        //get all the h2's with an id
                        $pokemon_row = $pokemon_xpath->query('//tr[@data-team_id]');
                        $pokemon_list = array();
                        $i = 0;
                        if($pokemon_row->length > 0){
                            foreach($pokemon_row as $row){
                                echo "<tr>";
                                if($i < 20){
                                    $types = $pokemon_xpath->query('td', $row);
                                    $n = 0;
                                    foreach($types as $type){
                                        if($type->nodeValue != ""){
                                            if($n != 1){
                                                if($n != 7){
                                                    if($n != 8){
                                                        if($n != 9){
                                                            if($n != 11){
                                                                $nodeValue = "<td>".$type->nodeValue.'</td>';
                                                                echo $nodeValue;
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                        $n++;
                                    }
                                    $i ++;
                                }
                                echo "</tr>";
                            }
                        }
                    } 
                ?>
            </tbody>
        </table>
    </div>
    <div class="t-c-b w-165">
        <a href="<?= base_url(); ?>eyevent/klasemen">
            <button type="" class="btn-green">Lihat Selengkapnya</button>
        </a>
    </div>
</div>

<script>
    $(document).ready(function(){

        $("#liga_inggris,#liga_italia,#liga_spanyol").hide();

        $("#select_league").change(function()
        {
            if($("#select_league").val() == "indonesia")
            {
                $("#liga_inggris,#liga_italia,#liga_spanyol").hide();
                $("#liga_indonesia").show();
            }
            else if($("#select_league").val() == "inggris")
            {
                $("#liga_indonesia,#liga_italia,#liga_spanyol").hide();
                $("#liga_inggris").show();
            }
            else if($("#select_league").val() == "spanyol")
            {
                $("#liga_indonesia,#liga_inggris,#liga_italia").hide();
                $("#liga_spanyol").show();
            }
            else if($("#select_league").val() == "italia")
            {
                $("#liga_indonesia,#liga_inggris,#liga_spanyol").hide();
                $("#liga_italia").show();
            }
        });
    })
</script>