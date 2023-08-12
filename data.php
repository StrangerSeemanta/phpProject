
<?php
                    $dir = new FilesystemIterator("data/");
                    foreach($dir as $file){
                        $fpath = $file->getPathname();   
                        $fpath = str_replace('\\','/',$fpath);             
                        $read_file = fopen($fpath,'r');
                        $content = fread($read_file,filesize($fpath));
                        fclose($read_file);
                    

                    header('Content-Type:text/html');
                    header('Content-Length: '.strlen($content));
                    echo $content;
                    }
                ?>