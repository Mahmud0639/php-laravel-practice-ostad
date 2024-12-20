<?php

$contacts = [];

while(true){
    echo "\nContact Management Menu\n";
    echo "1. Add Contact\n2. View Contact\n3. Exit\n\n";
    $choice = (int)readline("Choose an option: ");

    if($choice===1){
        $name = readline("Enter name: ");
        $email = readline("Enter email: ");
        $phone = readline("Enter phone: ");

        addContact($contacts,$name,$email,$phone);
    
    }elseif($choice===2){
        viewContact($contacts);
    }elseif($choice===3){
        echo "Exiting...";
        exit();
    }else{
        echo "Invalid number. Please try again!";
        exit();
    }
}

function addContact(array &$contacts,string $name,string $email,string $phone):void{
    $contacts[] = ['name'=>$name,'email'=>$email,'phone'=>$phone];
    echo "Contact saved successfully!\n";
}

function viewContact(array &$contacts):void{
    if(empty($contacts)){
        echo "No data found.\n";
        exit();
    }else{
        foreach($contacts as $contact){
            echo "\nName: {$contact['name']},Email: {$contact['email']},Phone: {$contact['phone']}";
        }
    }
}