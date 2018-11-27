# Gourmet

A DBMS Project

## INSTRUCTION READ

### Naming Rules

#### Table Naming

- Use lowercase - to improve type speed
- Table name must be singular singular

#### Attributes Naming

- Use underscore to separate two words in attributes name ie `user_id` not like  `userid` , `userId`
- Add prefix to atrribute if attribute is foreign key, see this.

## TODO

- [x] think about what to do
- [x] Create database
- [x] Enter some for dev data
- [x] ~~find~~ create css
- [ ] Create Front End (99%)
- [ ] Create Back End (98%)
- [x] add login and signup warning CSS
- [x] Enter more data
- [ ] Create Slide of databse layout

- [x] create back end for Delete item
- [x] Add back for end food item
- [x] In add_rest, modify fields
    - [x] rating is still integer (motta)
    - [x] insert time in proper form
- [x] In serve_query, redirect to somewhere
    - [x] ~~also display, if creation of restaurant was a success~~ redirect to restro page
    - [x] ** add constraints** , ~~like limit time between 00:00 to 24:00~~ time limit to restro open and close time

- [x] In booking.php, add restaurant details in frontend
    - [x] also display, total number of seats available,
    - [ ] ~~create constraint, id user enters more number of seats than available~~
    - [ ] ~~return some number, jo user physically restaurant ko dikhayega. **GUI**~~
- [x] **GUI** modify price in cuisines
- [x] **GUI** modify time input remove AM/PM add 24 hours format
- [x] In user.php, add a link to see all of his booking status
- [x] Link `view restaurants` to search results
- [x] In add, serve form, mention if discount is price or %
    - [x] add constraint that `0%<=discount<99%`(database problem)
- [x] ~~Repeated error, on line28 of restaurant.php ``` Warning: Invalid argument supplied for foreach() in C:\wamp64\www\Gourmet\restaurant.php on line 28```~~
- [ ] same naam ke kai restaurant add ho rahe hain(database problem)
- [x]  add more info in search_food.php
- [ ] ** return if restaurant not found in `restaurant.php`**
- [x]  restaurant not adding in `restaurant.php`
- [ ] **IMP.** **handle duplicate menu items in restaurant**

### **GUI**

- [x] Create search page
    - [x] create search food
    - [x] create search restaurant
- [ ] Add home button on all pages user login/logout buttons
- [x] Create css for user ~~and restro page~~
- [x] Create css for booking
- [x] modify `please login First`

### **if time remains**
- [ ] add sort by option in `rest_list` and `food_list`
- [ ] modify scroll bar
- [ ] remove if and use try catch

(check with another table on books)[https://stackoverflow.com/questions/3880698/can-a-check-constraint-relate-to-another-table]
- ~~[ ] Try to separate back end and front end~~
