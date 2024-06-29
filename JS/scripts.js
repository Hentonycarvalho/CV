$(document).ready(function() {
    $('#add-experience').click(function() {
        $('#experience').append('<div class="experience-item"><input type="text" name="experience[]" placeholder="Descrição da experiência"><button type="button" class="remove-experience">Remover</button></div>');
    });

    $(document).on('click', '.remove-experience', function() {
        $(this).closest('.experience-item').remove();
    });

    $('#add-education').click(function() {
        $('#education').append('<div class="education-item"><input type="text" name="education[]" placeholder="Descrição da educação"><button type="button" class="remove-education">Remover</button></div>');
    });

    $(document).on('click', '.remove-education', function() {
        $(this).closest('.education-item').remove();
    });
});