fetch('https:corona.lmao.ninja/v2/countries/bangladesh')
        .then(response => response.json())
        .then(data =>{
            const cases = document.getElementById('case');
            cases.innerText = data.cases;
            const todaysCases = document.getElementById('today-case');
            todaysCases.innerText = data.todayCases;
            const todaysDeaths = document.getElementById('today-death');
            todaysDeaths.innerText = data.todayDeaths;
            const death = document.getElementById('death');
            death.innerText = data.deaths;
            const recovered = document.getElementById('recovered');
            recovered.innerText = data.recovered;
        });