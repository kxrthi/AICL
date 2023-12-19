<!DOCTYPE html>
<html lang="en">
<head>
<h2><u><b>C++</b></u></h2>Learning and updating C++ codes<br><br>
  </head>
  <body>
16 Dec - Connecting VScode with Git Repo
<hr>
<br>
<details>
<summary font-size: large; font-weight: bold; padding: 2px;>Item 1 : View C++ as a federation of languages</summary><br>
<b><u>Objective</u> :</b> Understanding C++ language<br>
<b><u>Key Notes</u> :</b>
<br>- It is better to view C++ as a combination of sublanguages ( C , OOP , STL and Template )
<br>- We need to follow the respectives rules/conventions when we are working with those sublanguages i.e the rules is dependent on which part of C++ we are 
    working with.
<br><hr></details>
<details>
<summary>Item 2 : Prefer consts, enums, and inlines to #defines</summary><br>
<b><u>Objective</u> : </b>Learn to avoid #define and use other Techniques<br>
<b><u>Key Notes</u> : </b>
<br>- Using #define is not preferred as it can sometimes be removed by the preprocessor before the source code gets to compiler.
<br>- If the variable name we use,already exists,it can overwrite those values.
<br>- By using const, we can make sure that we have no issues since the variable would become read-only and no further changes can be done to it.
<br>- Class pointers and class specific constants are two specifal cases when replacing #define.
<br>- #define cant be used to define class-specific constants as  #defines don't respect scope. i.e it's declared at the start of program and remains the same
    till end , hence it can't be class specific.
<br><b>- Enum Hack : </b> enum{ Var_name=5; } , if we use const, we can get address of the variable but if we #defines, we cant .Sometimes, when we need to hide
    the address of integral variable, we can use enum to hide it.
<br>For macros with functions, better use inline functions/templates.
<br><hr></details>

<details>
<summary>Item 3 : Use const whenever possible</summary><br>
<b><u>Objective</u> : </b>Understanding const keyword<br>
<b><u>Key Notes</u> :</b>
<br>- It is a very versatile keyword which we can use to make any data non-modifiable.
<br>- If the word const appears to the left of the asterisk, what's pointed to is constant; if the word const appears to the right of the asterisk, the pointer itself is constant; if const appears on both sides, both are constant.
<br>- Declaring operator* return value as const.
<br>- Const can be given to member functions as well.
<br>- const on member functions identifies which member functions may be invoked on const objects.
<br>- Bitwise constness (also known as physical constness) and logical constness.
<br>- <b>Mutable</b> frees non-static data members from the constraints of bitwise constness
<br>- <b>Casting</b> When const and non-const member functions have essentially identical implementations, code duplication can be avoided by having the non-const version call the const version.
<br><hr></details>



</body>
