/**
 * Created by inet2005 on 12/13/15.
 */
$(document).ready(function(){
    $('#searchbox').selectize({
        valueField: 'url',
        labelField: 'name',
        searchField: ['name'],
        maxOptions: 10,
        options: [],
        create: false,
        render: {
            option: function(escape) {
                return '<div> +escape(item.name)+</div>';
            }
        },
        optgroups: [
            {value: 'article', label: 'Article'},
        ],

        optgroupField: 'class',
        optgroupOrder: ['article'],
        load: function(query, callback) {
            if (!query.length) return callback();
            $.ajax({
                url: root+'/api/search',
                type: 'GET',
                dataType: 'json',
                data: {
                    q: query
                },
                error: function() {
                    callback();
                },
                success: function(res) {
                    callback(res.data);
                }
            });
        },
        onChange: function(){
            window.location = this.items[0];
        }
    });
});