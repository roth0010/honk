/*
    Function to send a request for the specified state once the User has made a selection
 */
document.getElementById('region').onchange = function() {
    let selection = this.value
    let url = 'https://api.weather.gov/alerts/active?area='
    url = url + selection
    fetch(url)
        .then(response => {
            return response.json() })
        .then(data => {
            const alerts = document.getElementById('alerts')
            // This clears previous alerts on the div
            alerts.innerHTML = '';
            // Function to display a message if there are no alerts to display.
            if(data.features.length === 0) {
                console.log('this one`s empty boss')
                let warning = document.createElement('strong')
                warning.innerText = "No Alerts to Display."
                alerts.append(warning)
            }
            // Function that runs through all the alerts and prints them to the dom
            for(let i = 0; i < data.features.length; i++){
                let alertData = data.features[i];
                let newAlert;
                newAlert = document.createElement('div')
                newAlert.className = 'card bg-gray presentationCard'
                // create the overarching Div
                let margin = document.createElement('div')
                margin.className = 'margin-top1'
                // create the headline in bold
                let strong;
                strong = document.createElement('strong')
                let title;
                title = document.createElement('h3')
                title.innerText = alertData.properties.headline
                strong.appendChild(title)
                margin.appendChild(strong)
                // create the instruction text
                if(alertData.properties.instruction !== null){
                    let instruction = document.createElement('p')
                    instruction.innerHTML = '<strong>Instructions: </strong>' + alertData.properties.instruction
                    margin.appendChild(instruction)
                }
                // create the severity text
                let severity = document.createElement('p')
                severity.innerHTML = '<strong>Severity: </strong>' + alertData.properties.severity
                margin.appendChild(severity)
                // create the certainty text
                let certainty = document.createElement('p')
                certainty.innerHTML = '<strong>Certainty: </strong>' + alertData.properties.certainty
                margin.appendChild(certainty)
                // create the event text
                let event = document.createElement('p')
                event.innerHTML = '<strong>Event: </strong>' + alertData.properties.event
                margin.appendChild(event)
                // create the description text
                let description = document.createElement('p')
                description.innerHTML = '<strong>Description: </strong>' + alertData.properties.description
                margin.appendChild(description)
                // create the area description text
                let areaDesc = document.createElement('p')
                areaDesc.innerHTML = '<strong>Affected Areas: </strong>' + alertData.properties.areaDesc
                margin.appendChild(areaDesc)
                // create the area description text
                let smallSenderName = document.createElement('small')
                let senderName = document.createElement('p')
                senderName.innerHTML = 'Reporting Station: ' + alertData.properties.senderName
                smallSenderName.appendChild(senderName)
                margin.appendChild(smallSenderName)
                // create the effective text
                let smallEffective = document.createElement('small')
                let effective = document.createElement('p')
                effective.innerHTML = 'Effective: ' + alertData.properties.effective
                smallEffective.appendChild(effective)
                margin.appendChild(smallEffective)
                // create the ends text
                if(alertData.properties.ends !== null) {
                    let smallEnds = document.createElement('small')
                    let ends = document.createElement('p')
                    ends.innerHTML = 'Ends: ' + alertData.properties.ends
                    smallEnds.appendChild(ends)
                    margin.appendChild(smallEnds)
                }
                // Final Append Child
                newAlert.appendChild(margin)
                alerts.append(newAlert)
                console.log(alertData)
            }
        })
        .catch(error => {
            console.error(error);
        });
}





