<?php

	// Tests:
	// include('../time-since.php');
	// ini_set('display_errors', 0);
	// error_reporting(0);

	$json = file_get_contents('https://api.todoist.com/API/query?token=YOU_API_KEY&queries=["viewall"]');
	$obj = json_decode($json);

?>             
                <header class="item-header" style="background-image: url(images/todoist.jpg);">
                <div class="shade"></div>
                            
                    <p>Last task added 

					<?php
					$a = 0;
					foreach ($obj as $data) :
				    	
				    	$b = 0;
				    	foreach ($data->data as $taskdata) :
				
							krsort($taskdata->uncompleted);
							$c = 0;
				    		foreach ($taskdata->uncompleted as $task) :
				    			
				    			// echo $task->content;
				    			$timeadded = aika(abs(strtotime($task->date_added . " GMT")), time());
				    			if(empty($timeadded)) :
				    				$timeadded = " a moment ";
								else :
									$timeadded = " ".aika(abs(strtotime($task->date_added . " GMT")), time())." ";
								endif;
									echo $timeadded;

								if (++$c == 1) break;

							endforeach;

							if (++$b == 1) break;
				    	endforeach;
				
					if (++$a == 1) break;
					endforeach;
					?> 

					ago.

                    </p>

                </header>

                <div class="item-wrapper">

                    <h4><span class="fa fa-check-square-o"></span>Todo</h4>

                    <p>I use Todoist daily as my todo list. Every time I have an idea or a thing to do, I add it to a list. Otherwise I'd forget about it.</p>

                    <p>Currently 

					<?php
					foreach ($obj as $data) :
				    	
				    	foreach ($data->data as $taskdata) :
				
				    		$sum+= count($taskdata->uncompleted);
				
				    	endforeach;
				
				    	echo $sum;
				
					endforeach;
					?>

                    uncompleted tasks. Lots of completed tasks as well, don't worry.</p>

                    <ul class="links">
                        <li><a href="https://todoist.com/"><img src="images/todoist.svg" alt="Todoist" />Todoist</a></li>
                    </ul>

                </div><!--/.item-wrapper-->