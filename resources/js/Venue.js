$(document).ready(function() {
    $('.venue-city').on('change', function() {
        let sCity = $(this).val();
        let sCategory = $('.venue-category').data('category');
        if (sCity === '') {
            return;
        }
        axios.get('/api/venue/' + sCategory + '/getList/' + sCity).then(response => {
            let responseData = response.data.data.results;
            resetTable(responseData);
        }).catch(error => {
            console.error('There was an error!', error); 
        });
    });

    function resetTable(responseData) {
        let aColumns = [
            {
                title : 'Name', 
                data  : 'name'
            },
            {
                title : 'Location',
                data  : 'location.formatted_address'
            },
            {
                title : 'Longtitude',
                data  : 'geocodes.main.longitude'
            },
            {
                title : 'Latitude',
                data  : 'geocodes.main.latitude'
            }
        ];
        let oAddressDefinition = {
            "targets" : 1,
            "render"  : function(data, type, row, meta) {
                let sLLDetails = row.geocodes.main.latitude + ',' + row.geocodes.main.longitude;
                return '<a target="_blank" href="https://www.google.com/maps/dir/?api=1&destination=' + sLLDetails + '">' + data + '</a>';
            }
        };
        let oLongDefinition = {
            "targets" : 2,
            "visible" : false
        };
        let oLatDefinition = {
            "targets" : 3,
            "visible" : false
        };
        let oColumnDefs = [
            oAddressDefinition,
            oLongDefinition,
            oLatDefinition
        ]
        new DataTable('#venue-table', {
            data        : responseData,
            columns     : aColumns,
            destroy     : true,
            order       : [[0, "asc"]],
            columnDefs  : oColumnDefs
        });
    }
});