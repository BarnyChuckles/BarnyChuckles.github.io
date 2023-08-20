print "What's your first name? "
first_name = gets.chomp
first_name.capitalize!
first_name = gets.chomp

print "What's your last name? "
last_name = gets.chomp
last_name.capitalize!
last_name = gets.chomp

puts "Welcome #{first_name} #{last_name}!"
