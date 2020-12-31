Dear $[SPONSOR_FIRST_NAME],

We had the time of our lives at the <?php echo $event_name; ?>! Thank you so much for pledging:
$[PARTICIPANT_NAMES]
They had a blast participating in the <?php echo $event_name; ?>!  If you missed it, here's a snapshot of the fun: (insert Facebook photo album link or youtube link)

As one of the heroes supporting the <?php echo $event_name; ?>, your generosity helped us raise (enter estimated school profit) for <?php echo $microsite->funds_raised_for ? $microsite->funds_raised_for : '(enter funds raised for)'; ?>. Woo-hoo! High five!

If you need to log in to your profile and pay for pledges, you can do so here: $[SPONSOR_PAYMENT_LINK]

So we can make supporting our school even better next time, please click <?php echo $survey_url ? $survey_url : '$[SURVEY_LINK]'?> to give us your thoughts. What did you think?

Until next time, hero of <?php echo $event_name; ?>. Keep being great.

- <?php echo $payee;

