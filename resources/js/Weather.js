// Table header for key, Object Key for value
const oWeatherDependentRows = {
    'Rain(3h) in mm'    : 'rain.3h',
    'Rain(1h) in mm'    : 'rain.1h',
    'Snow(3h) in mm'    : 'snow.3h',
    'Snow(1h) in mm'    : 'snow.1h',
    'Temperature'       : 'main.temp',
    'Max Temperature'   : 'main.temp_max',
    'Min Temperature'   : 'main.temp_min'
}

$('.weather-city').on('change', function() {
    let sCity = $(this).val();
    if (sCity === '') {
        $('.content table').remove();
        return false;
    }
    axios.get('/api/weather/' + sCity).then(response => {
        let responseData = response.data.data;
        resetDataTable(responseData)
    }).catch(error => {
        console.error('There was an error!', error);
    });
});

function resetDataTable(responseData) {
    let oContent = $('.content');
    oContent.find('table').remove();
    let oWeatherTable = $('<table></table>').addClass(['table', 'weather-table', 'table-bordered']);
    let aWeathers = responseData.weather;
    let oWeatherRow = $('<tr></tr>');
    let oWeatherHeader = $('<th></th>').addClass('px-3').append('Weather');
    oWeatherRow.append(oWeatherHeader);

    // Render Weather Content
    aWeathers.forEach(function (oWeather) {
        let oWeatherContent = $('<td></td>').addClass('px-5 pt-4');
        let oWeatherFigure = $('<figure></figure>').addClass('figure');
        let oWeatherImage = $('<img>').addClass(['figure-img', 'img-fluid', 'rounded'])
            .attr('src', 'https://openweathermap.org/img/wn/' + oWeather.icon + '@2x.png')
            .attr('alt', oWeather.description);
        let oWeatherFigCaption = $('<figcaption></figcaption>').addClass(['figure-caption', 'center-block'])
            .append(oWeather.description);
        oWeatherFigure.append(oWeatherImage);
        oWeatherFigure.append(oWeatherFigCaption);
        oWeatherContent.append(oWeatherFigure);
        oWeatherRow.append(oWeatherContent);   
    });
    oWeatherTable.append(oWeatherRow);
    
    let oTempRow;
    let oTempHeader;
    let oTempContent;

    // Render other row that is dependent on oWeatherDependentRows
    for (const sHeader in oWeatherDependentRows) {
        let aKeys = oWeatherDependentRows[sHeader].split('.');
        if (aKeys[0] in responseData) {
            let mValue = responseData;
            aKeys.forEach(function (sKey) {
                if (sKey in mValue) {
                    mValue = mValue[sKey];
                }
            });
            // Skip adding of row if value do not exist for the column
            if (typeof mValue === 'object') {
                continue;
            }
            oTempRow = $('<tr></tr>');
            oTempHeader = $('<th></th>').addClass('px-3').append(sHeader);
            oTempContent = $('<td></td>').addClass('px-2 pt-1').append(mValue);
            oTempRow.append(oTempHeader).append(oTempContent);
            oWeatherTable.append(oTempRow);
        }
    }
    oContent.append(oWeatherTable);
}