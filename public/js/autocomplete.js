
function repoFormatResult(repo) {
  var markup = '<div>' + repo.label + '</div>';
  return markup;
}

function repoFormatSelection(repo) {
  return repo.label;
}

$(document).ready(function(){

	$(".genAutocomplete").each(function(){
		var placeholder = $(this).attr("placeholder");
		var url = $(this).attr("data-url");
		$(this).select2({
			placeholder: placeholder,
			minimumInputLength: 1,
			ajax: { // instead of writing the function to execute the request we use Select2's convenient helper
				url: url,
				dataType: 'json',
				quietMillis: 250,
				data: function (term, page) {
					return {
						q: term, // search term
					};
				},
				results: function (data, page) { // parse the results into the format expected by Select2.
					// since we are using custom formatting functions we do not need to alter the remote JSON data
					return { results: data.items };
				},
				cache: true
			},
			initSelection: function(element, callback) {
				// the input tag has a value attribute preloaded that points to a preselected repository's id
				// this function resolves that id attribute to an object that select2 can render
				// using its formatResult renderer - that way the repository name is shown preselected
				var id = $(element).val();
				return id;
			},
			formatResult: repoFormatResult, // omitted for brevity, see the source of this page
			formatSelection: repoFormatSelection,  // omitted for brevity, see the source of this page
			dropdownCssClass: "bigdrop", // apply css that makes the dropdown taller
			escapeMarkup: function (m) { return m; } // we do not want to escape markup since we are displaying html in results
		});
		$(this).removeClass("genAutocomplete");
	});
});
