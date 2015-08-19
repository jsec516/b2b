<?php
return array (
		
		// form inputs
		'email_field' => 'Email',
		'password_field' => 'Password',
		'remember_me_field' => 'Remember Me',
		// home page
		'top_greetings' => 'Welcome :user_role',
		// authentication and registration
		'login' => 'Sign In',
		'register' => 'Join Free',
		// additional text
		'call_us' => 'Call Us',
		// mini-menu
		'buy_menu_text' => 'Buy',
		'sell_menu_text' => 'Sell',
		'advertise_menu_text' => 'Advertise',
		'help_menu_text' => 'Help',
		// search form
		'search_form' => [ 
				'term_placeholder' => 'Enter keyword to search',
				'btn_text' => 'Search' 
		],
		//    menu
		'nav' => [ 
				'home' => 'Home',
				'pr_or_ser' => 'Products / Services',
				'companies' => 'Companies',
				'buy_lead' => 'Buy Leads'
		],
		// items
		'buy_lead_btn' => 'Post Buy Requirement',
		// etc.
		'hot_regions' => 'Hot Regions',
		'browse_categories_heading' => 'Browse our product categories',
		// Emails
		'confirmation_subject' => 'Invoice Ninja Account Confirmation',
		'confirmation_header' => 'Account Confirmation',
		'confirmation_message' => 'Please access the link below to confirm your account.',
		'invoice_subject' => 'New invoice :invoice from :account',
		'invoice_message' => 'To view your invoice for :amount, click the link below.',
		'payment_subject' => 'Payment Received',
		'payment_message' => 'Thank you for your payment of :amount.',
		'email_salutation' => 'Dear :name,',
		'email_signature' => 'Regards,',
		'email_from' => 'The Invoice Ninja Team',
		'user_email_footer' => 'To adjust your email notification settings please visit ' . SITE_URL . '/company/notifications',
		'invoice_link_message' => 'To view your client invoice click the link below:',
		'notification_invoice_paid_subject' => 'Invoice :invoice was paid by :client',
		'notification_invoice_sent_subject' => 'Invoice :invoice was sent to :client',
		'notification_invoice_viewed_subject' => 'Invoice :invoice was viewed by :client',
		'notification_invoice_paid' => 'A payment of :amount was made by client :client towards Invoice :invoice.',
		'notification_invoice_sent' => 'The following client :client was emailed Invoice :invoice for :amount.',
		'notification_invoice_viewed' => 'The following client :client viewed Invoice :invoice for :amount.',
		'reset_password' => 'You can reset your account password by clicking the following link:',
		'reset_password_footer' => 'If you did not request this password reset please email our support: ' . CONTACT_EMAIL,
		
		// Payment page
		'secure_payment' => 'Secure Payment',
		'card_number' => 'Card number',
		'expiration_month' => 'Expiration month',
		'expiration_year' => 'Expiration year',
		'cvv' => 'CVV',
		
		// Security alerts
		'security' => [ 
				'too_many_attempts' => 'Too many attempts. Try again in few minutes.',
				'wrong_credentials' => 'Incorrect email or password.',
				'confirmation' => 'Your account has been confirmed!',
				'wrong_confirmation' => 'Wrong confirmation code.',
				'password_forgot' => 'The information regarding password reset was sent to your email.',
				'password_reset' => 'Your password has been changed successfully.',
				'wrong_password_reset' => 'Invalid password. Try again' 
		],
		
		'app_title' => 'Smart way of doing business',
		'app_description' => 'AuctionZoo is a B2B marketplace.',
		
		'rows' => 'rows',
		'www' => 'www',
		'logo' => 'Logo',
		'subdomain' => 'Subdomain',
		'provide_name_or_email' => 'Please provide a contact name or email',
		'charts_and_reports' => 'Charts & Reports',
		'chart' => 'Chart',
		'report' => 'Report',
		'group_by' => 'Group by',
		'paid' => 'Paid',
		'enable_report' => 'Report',
		'enable_chart' => 'Chart',
		'totals' => 'Totals',
		'run' => 'Run',
		'export' => 'Export',
		'documentation' => 'Documentation',
		'zapier' => 'Zapier <sup>Beta</sup>',
		'recurring' => 'Recurring',
		'last_invoice_sent' => 'Last invoice sent :date',
		
		'processed_updates' => 'Successfully completed update',
		'tasks' => 'Tasks',
		'new_task' => 'New Task',
		'start_time' => 'Start Time',
		'created_task' => 'Successfully created task',
		'updated_task' => 'Successfully updated task',
		'edit_task' => 'Edit Task',
		'archive_task' => 'Archive Task',
		'restore_task' => 'Restore Task',
		'delete_task' => 'Delete Task',
		'stop_task' => 'Stop Task',
		'time' => 'Time',
		'start' => 'Start',
		'stop' => 'Stop',
		'now' => 'Now',
		'timer' => 'Timer',
		'manual' => 'Manual',
		'date_and_time' => 'Date & Time',
		'second' => 'second',
		'seconds' => 'seconds',
		'minute' => 'minute',
		'minutes' => 'minutes',
		'hour' => 'hour',
		'hours' => 'hours',
		'task_details' => 'Task Details',
		'duration' => 'Duration',
		'end_time' => 'End Time',
		'end' => 'End',
		'invoiced' => 'Invoiced',
		'logged' => 'Logged',
		'running' => 'Running',
		'task_error_multiple_clients' => 'The tasks can\'t belong to different clients',
		'task_error_running' => 'Please stop running tasks first',
		'task_error_invoiced' => 'Tasks have already been invoiced',
		'restored_task' => 'Successfully restored task',
		'archived_task' => 'Successfully archived task',
		'archived_tasks' => 'Successfully archived :count tasks',
		'deleted_task' => 'Successfully deleted task',
		'deleted_tasks' => 'Successfully deleted :count tasks',
		'create_task' => 'Create Task',
		'stopped_task' => 'Successfully stopped task',
		'invoice_task' => 'Invoice Task',
		'invoice_labels' => 'Invoice Labels',
		'prefix' => 'Prefix',
		'counter' => 'Counter',
		
		'payment_type_dwolla' => 'Dwolla',
		'gateway_help_43' => ':link to sign up for Dwolla.',
		'partial_value' => 'Must be greater than zero and less than the total',
		'more_actions' => 'More Actions',
		
		'pro_plan_title' => 'NINJA PRO',
		'pro_plan_call_to_action' => 'Upgrade Now!',
		'pro_plan_feature1' => 'Create Unlimited Clients',
		'pro_plan_feature2' => 'Access to 10 Beautiful Invoice Designs',
		'pro_plan_feature3' => 'Custom URLs - "YourBrand.InvoiceNinja.com"',
		'pro_plan_feature4' => 'Remove "Created by Invoice Ninja"',
		'pro_plan_feature5' => 'Multi-user Access & Activity Tracking',
		'pro_plan_feature6' => 'Create Quotes & Pro-forma Invoices',
		'pro_plan_feature7' => 'Customize Invoice Field Titles & Numbering',
		'pro_plan_feature8' => 'Option to Attach PDFs to Client Emails',
		
		'resume' => 'Resume',
		'break_duration' => 'Break',
		'edit_details' => 'Edit Details',
		'work' => 'Work',
		'timezone_unset' => 'Please :link to set your timezone',
		'click_here' => 'click here',
		
		'email_receipt' => 'Email payment receipt to the client',
		'created_payment_emailed_client' => 'Successfully created payment and emailed client',
		'add_account' => 'Add Account',
		'untitled' => 'Untitled',
		'new_account' => 'New Account',
		'associated_accounts' => 'Successfully linked accounts',
		'unlinked_account' => 'Successfully unlinked accounts',
		
		'or' => 'or',
		
		'email_error' => 'There was a problem sending the email' 
);
