  ##schema
-user{
    -name
    -email
    -password
    -blood-group
    -location
    -image
    -date-of-birth
    -gender
    -mobile
}

doctor{
    -name
    -email
    -password
    -bio
    -location
    -image
    -price
    -gender
    -mobile
    -special
}

-appointment {
    user_id
    doctor_id
    date
    time
    status(pending)
    order
} 