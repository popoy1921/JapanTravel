$('.venue-city').on('change', function() {
    console.log(1);
    let sCity = $(this).val();
    if (sCity === '') {
        console.log(1);
    }
    axios.get('/api/venue/search/' + sCity).then(response => {
        let responseDate = response.data.data;
        resetDataTable(responseDate)
    }).catch(error => {
        console.error('There was an error!', error);
    });
});