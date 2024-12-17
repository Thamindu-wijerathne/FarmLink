<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Calendar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            color: #000000;
        }
        .calendar-container {
            text-align: center;
            margin-top: 20px;
        }
        .navigation {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 70%;
            margin: 10px auto;
        }
        .month-year {
            font-size: 24px; /* Larger font size */
            font-weight: bold;
        }
        button {
            padding: 8px 15px;
            margin: 5px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            background-color: #508D4E;
            color: #ffffff;
            border-radius: 5px;
        }
        button:hover {
            background-color: #1A5319;
        }
        table {
            width: 70%;
            margin: auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
            position: relative; /* Needed for positioning the dots */
        }
        th {
            background-color: #508D4E;
            color: #ffffff;
        }
        td {
            height: 50px;
        }
        .highlight {
            font-weight: bold;
            color: #ff0000;
        }
        .event-dots {
            display: flex;
            justify-content: center;
            gap: 3px; /* Space between dots */
            position: absolute;
            bottom: 5px; /* Place the dots at the bottom */
            left: 50%;
            transform: translateX(-50%);
        }
        .event-dot {
            width: 6px;
            height: 6px;
            background-color: #ff0000;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <div class="calendar-container">
        <!-- Navbar Component -->
        <?php $this->renderComponent('navbar', ['activeIndex' => 2]); ?>
        <h1>Dynamic Calendar</h1>

        <!-- Navigation Section -->
        <div class="navigation">
            <button onclick="changeMonth(-1)">Previous</button>
            <span id="monthYear" class="month-year"></span>
            <button onclick="changeMonth(1)">Next</button>
        </div>

        <!-- Calendar Table -->
        <table id="calendar">
            <thead>
                <tr>
                    <th>Sun</th>
                    <th>Mon</th>
                    <th>Tue</th>
                    <th>Wed</th>
                    <th>Thu</th>
                    <th>Fri</th>
                    <th>Sat</th>
                </tr>
            </thead>
            <tbody>
                <!-- Calendar data will be loaded dynamically -->
            </tbody>
        </table>
    </div>

    <script>
        // Data for specific dates with multiple events
        const data = {
            "2024-03-10": ["Planting Day", "Equipment Maintenance"],
            "2024-03-15": ["Harvesting Start", "Team Meeting"],
            "2024-03-22": ["Fertilizer Application"],
            "2024-04-05": ["Irrigation Day", "Soil Testing"]
        };

        let currentDate = new Date();

        // Function to render the calendar
        function generateCalendar() {
            const calendarBody = document.querySelector("#calendar tbody");
            const monthYearLabel = document.getElementById("monthYear");
            const year = currentDate.getFullYear();
            const month = currentDate.getMonth();

            // Update month and year label
            const monthNames = [
                "January", "February", "March", "April", "May", "June",
                "July", "August", "September", "October", "November", "December"
            ];
            monthYearLabel.innerText = `${monthNames[month]} ${year}`;

            // Clear previous calendar content
            calendarBody.innerHTML = "";

            // Get the number of days in the month
            const daysInMonth = new Date(year, month + 1, 0).getDate();
            const firstDay = new Date(year, month, 1).getDay();

            let dayCount = 1;
            for (let row = 0; row < 6; row++) { // Up to 6 weeks
                let tr = document.createElement("tr");
                for (let col = 0; col < 7; col++) { // 7 days in a week
                    let td = document.createElement("td");

                    if (row === 0 && col < firstDay) {
                        td.innerText = "";
                    } else if (dayCount > daysInMonth) {
                        td.innerText = "";
                    } else {
                        const dateKey = `${year}-${String(month + 1).padStart(2, '0')}-${String(dayCount).padStart(2, '0')}`;
                        td.innerText = dayCount;

                        // Highlight specific dates with events
                        if (data[dateKey]) {
                            td.classList.add("highlight");
                            td.title = data[dateKey].join(", "); // Tooltip with event details

                            // Create a container for dots
                            const eventDotsContainer = document.createElement("div");
                            eventDotsContainer.classList.add("event-dots");

                            // Add a dot for each event
                            data[dateKey].forEach(() => {
                                const dot = document.createElement("div");
                                dot.classList.add("event-dot");
                                eventDotsContainer.appendChild(dot);
                            });

                            td.appendChild(eventDotsContainer); // Add dots container to the cell
                        }

                        dayCount++;
                    }
                    tr.appendChild(td);
                }
                calendarBody.appendChild(tr);

                // Stop if all days are rendered
                if (dayCount > daysInMonth) break;
            }
        }

        // Function to change the month
        function changeMonth(offset) {
            currentDate.setMonth(currentDate.getMonth() + offset);
            generateCalendar();
        }

        // Initial calendar load
        window.onload = generateCalendar;
    </script>
</body>
</html>
