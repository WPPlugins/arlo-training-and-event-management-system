[arlo_template_region_selector]

[arlo_search_field placeholder="Search events" buttonclass="arlo-button" showbutton="true"]

<table class="table event-templates">
	<tr>
		<th>Name</th>
		<th>Duration</th>
		<th>Price 
			<small>(excl. GST)</small>
		</th>
		<th>Next Running</th>
	</tr>
    [arlo_event_template_list_item]
        <tr>
            <td>
                [arlo_event_template_permalink wrap='<a href="%s">'][arlo_event_template_name]</a>
                [arlo_event_template_tags]
            </td>
            <td>[arlo_event_template_advertised_duration]</td>
            <td>[arlo_event_price]</td>
            <td>[arlo_event_next_running]</td>
        </tr>
    [/arlo_event_template_list_item]
</table>

[arlo_no_event_text]
[arlo_event_template_list_pagination]
[arlo_powered_by]