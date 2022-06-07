jQuery(function ($) {

    $.validator.addMethod('onlyLetters', function (value, element) {
        return this.optional(element) || /^[a-z\s0-9]+$/i.test(value)
    }, 'Please, provide the data of indicated type(only letters)')

    $('form').validate({
        rules: {
            sku: {
                required: true,
            },
            name: {
                required: true,
                onlyLetters: true,
            },
            price: {
                number: true,
                required: true,
            },
            size_dvd: {
                number: true,
                required: true,
            },
            weight_book: {
                number: true,
                required: true,
            },
            hight_furniture: {
                number: true,
                required: true,
            },
            width_furniture: {
                number: true,
                required: true,
            },
            length_furniture: {
                number: true,
                required: true,
            }



        },
        messages: {
            sku: {
                required: 'Please, submit required data',
            },
            name: {
                required: 'Please, submit required data',
  
            },

            price: {
                required: 'Please, submit required data',
                number: 'Please, provide the data of indicated type(only numbers)',
            },
            size_dvd:
            {
                required: 'Please, submit required data',
                number: 'Please, provide the data of indicated type(only numbers)',
            },
            weight_book:
            {
                required: 'Please, submit required data',
                number: 'Please, provide the data of indicated type(only numbers)',
            },
            height_furniture:
            {
                required: 'Please, submit required data',
                number: 'Please, provide the data of indicated type(only numbers)',
            },
            width_furniture:
            {
                required: 'Please, submit required data',
                number: 'Please, provide the data of indicated type(only numbers)',
            },
            length_furniture:
            {
                required: 'Please, submit required data',
                number: 'Please, provide the data of indicated type(only numbers)',
            },
        },
        submitHandler: function(form) {
            form.submit();
          }
    })

})
    //remove product 
 
   
    $('#js-delete').click(function () {
        let checkbox = $('.delete-checkbox:checked');
        if (checkbox.length > 0) {
            let checkbox_val = [];
            $(checkbox).each(function () {
                checkbox_val.push($(this).val());
            });
            $.ajax({
                url: '/del',

                method: "POST",
                data: {
                    id: checkbox_val
                },
                success: function () {
                    $('.delete-checkbox:checked').closest('div').remove()

                },
            })
        }
    })


  let select = document.getElementById('productType');
    let block = document.querySelectorAll('.block');
    let lastIndex = 0;
    select.addEventListener('change', function() {
        block[lastIndex].classList.toggle('hidden');
        let index = select.selectedIndex;
        block[index].classList.toggle('hidden');
        lastIndex = index;
    });


