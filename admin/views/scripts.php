<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
<script>
    function alert(type,msg){
        let bs_class = (type == 'success') ? 'alert-succes' : 'alert-danger';
        let element = document.createElement('div');
        element.innerHTML = `
            <div class="alert ${bs_class} alert-dismissible fade show custom-alert" role="alert">
                <strong class="me-3">${msg}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        `;
        document.body.append(element);
    }
    function setActivate()
    {
        let navbar = document.getElementById('dashboard-menu');
        let a_tags = navbar.getElementById('a');

        for(i=0; i<a_tags.lenght; i++)
        {
        let file = a_tags[i].href.split('/').pop();
        let file_name = file.split('.')[0];

        if(document.location.href.indexOf(file_name) >=0){
            a_tags[i].classicList.add('activate');
        }

        }
    }
    setActivate();
</script>