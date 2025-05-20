 
        function showTab(tabId) {
            document.querySelectorAll('.tab').forEach(tab => tab.classList.remove('active'));
            document.querySelectorAll('.tab-content').forEach(content => content.classList.remove('active'));
            document.querySelector(`[onclick="showTab('${tabId}')"]`).classList.add('active');
            document.getElementById(tabId).classList.add('active');
        }

        function fetchTrafficAlerts() {
          
            const mockAlerts = [
                "Congestion on A13 near Venue Entrance, expect 10-minute delays.",
                "Accident cleared on Tollgate Road, traffic flowing normally.",
                "Roadworks on Western Gateway until 10 PM, use alternate routes."
            ];
            const trafficList = document.getElementById('traffic-alerts-list');
            trafficList.innerHTML = '';
            mockAlerts.forEach(alert => {
                trafficList.innerHTML += `<li>${alert}</li>`;
            });
        }

        function bookHotel() {
            const checkin = document.getElementById('checkin').value;
            const guests = document.getElementById('guests').value;
            const errorDiv = document.getElementById('error');

            errorDiv.textContent = '';
            errorDiv.style.display = 'none';

            if (!checkin) {
                errorDiv.textContent = 'Please select a check-in date.';
                errorDiv.style.display = 'block';
                return;
            }

            // Validate guests
            if (!guests || guests < 1) {
                errorDiv.textContent = 'Please enter a valid number of guests (1 or more).';
                errorDiv.style.display = 'block';
                return;
            }

            // Mock booking success
            console.log('Hotel booking request:', { checkin, guests });
        }

        function goBack() {
            window.history.back();
        }