<?php
session_start();


if (!isset($_SESSION['username'])) {
    $_SESSION['username'] = "Guest";   
}
?>


<!DOCTYPE html>

<html lang="en">
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <div>
        <h1>Dashboard</h1>
         <p>Welcome, <?php echo $_SESSION['username']; ?>!</p>
         <button onclick="location.href='category.html'">Start Quiz</button>
  
    </div>
    <div>
        <div>
            <div class="navigation">
                <input type="button" value="Home Dashboard" onclick="showScreen('homeDashboard')">
                <input type="button" value="Analytics" onclick="showScreen('analytics')">
            </div>
        </div>
        <div>
            <div id="homeDashboard" class="screen">
                <h2>Home Dashboard</h2>
                <div style="display:flex; justify-content:space-around; margin-bottom:20px;">
                    <div
                        onclick="showDetails('widget1')"
                        style="background-color:#fff; padding:15px; border:1px solid #ddd; width:200px; text-align:center; cursor:pointer;"
                    >
                        <h3 style="margin-bottom: 10px;">Widget 1</h3>
                        <p>Summary of Data 1</p>
                    </div>
                    <div
                        onclick="showDetails('widget2')"
                        style="background-color:#fff; padding:15px; border:1px solid #ddd; width:200px; text-align:center; cursor:pointer;"
                    >
                        <h3 style="margin-bottom: 10px;">Widget 2</h3>
                        <p>Summary of Data 2</p>
                    </div>
                </div>
                <div>
                    <h2>Quick Actions</h2>
                    <ul>
                        <li><button onclick="exportTranscripts()">Export Personal Result Transcripts</button></li>
                        <li><button onclick="compareScores()">Compare Scores Across Test Versions</button></li>
                        <li><button onclick="viewHistory()">View Attempt History</button></li>
                    </ul>
                </div>
            </div>

            <div id="analytics" class="screen" style="display:none;">
                <h2>Analytics</h2>
                <p>Analytics data will be displayed here.</p>
            </div>

            <div id="transcripts" class="screen" style="display:none;">
                <div>
                    <h2>Personal Result Transcripts</h2>
                    <form action="exportTranscript.php" method="post">
    <label for="student_id">Enter Student ID:</label>
    <input type="text" id="student_id" name="student_id" required>
    <button type="submit">Export Transcript</button>
</form>
<p id="transcriptResult" style="margin-top:10px;"></p>
</div>
                    
                
            </div>

            <div id="scoreComparison" class="screen" style="display:none;">
                <div>
                    <h2>Score Comparison</h2>
                    <p>Displays the Score Comparison across different versions</p>
                </div>
            </div>

            <div id="history" class="screen" style="display:none;">
                <div>
                    <h2>Attempt History</h2>
                    <p>Show the attempt history with date and timestamps</p>
                </div>
            </div>

        </div>
    </div>

    <script>
        //Basic screen switching function
        function showScreen(screenId) {
            var screens = document.getElementsByClassName('screen');
            for (var i = 0; i < screens.length; i++) {
                screens[i].style.display = 'none';
            }
            document.getElementById(screenId).style.display = 'block';
        }

        function showDetails(widgetId) {
            alert('Details for ' + widgetId + ' will be shown here.  The widget ID is: ' + widgetId);
        }

        function exportTranscripts() {
            showScreen('transcripts');
        }

        function compareScores() {
            showScreen('scoreComparison');
        }

        function viewHistory() {
            showScreen('history');
        }

        
        showScreen('homeDashboard');
    </script>
</body>
</html>
