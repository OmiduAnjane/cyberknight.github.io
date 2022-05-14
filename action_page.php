# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = new Mailgun('d4fbd98577a1c9a8f07b06c68913a90d-100b5c8d-05c687d8');
$domain = "sandbox39c21ab0e58c4f8ab8a44fc06b9f073b.mailgun.org";

# Make the call to the client.
$result = $mgClient->sendMessage("$domain",
	array('from'    => 'Mailgun Sandbox <postmaster@sandbox39c21ab0e58c4f8ab8a44fc06b9f073b.mailgun.org>',
		  'to'      => 'Omindu Anjana <ominduanjana@gmail.com>',
		  'subject' => 'Hello Omindu Anjana',
		  'text'    => 'Congratulations Omindu Anjana, you just sent an email with Omiya Official!  You are truly awesome! '));

// You can see a record of this email in your logs: https://app.mailgun.com/app/logs.

// You can send up to 300 emails/day from this sandbox server.
// Next, you should add your own domain so you can send 10000 emails/month for free.