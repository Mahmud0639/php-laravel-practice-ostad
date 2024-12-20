<?php
//a project of Contact management app

$contacts = [];

while(true){
    echo "\n\nContact Management Menu\n";
    echo "1. Add Contact\n2. View Contact\n3. Exit\n";
    $choice = (int)readline("\nChoose an option: ");

    if($choice === 1){
        $name = readline("Enter name: ");
        $email = readline("Enter email: ");
        $phone = readline("Enter phone: ");

        addContact($contacts,$name,$email,$phone);
        echo "Contact added successfully!\n";
    }elseif($choice === 2){
        viewContacts($contacts);
    }elseif($choice===3){
        echo "Exiting...\n";
        break;
    }else{
        echo "Invalid option. Please try again.\n";
    }
}


function addContact(array &$contacts, string $name, string $email, string $phone):void{
    $contacts[] = ['name'=>$name,'email'=>$email,'phone'=>$phone];
}

function viewContacts(array &$contacts):void{
    if(empty($contacts)){
        echo "No contacts found.\n\n";
        $number =  (int)readline("Do you want to add contact? Press 1 for add 2 for exit: ");
        if($number===1){
            addContact($contacts,readline("Enter name: "),readline("Enter email: "),readline("Enter phone: "));
            echo "Contact added successfully!\n\n";
        }else{
            echo "Exiting...\n\n";
            //return;
            exit();
        }

        //here return or break
    }else{
        foreach($contacts as $contact){
            echo "\nName: {$contact['name']}, Email: {$contact['email']}, Phone: {$contact['phone']}\n";
        }

    }
    //echo "Name: {$contacts['name']}, Email: {$contacts['email']}, Phone: {$contacts['phone']}\n";
}

