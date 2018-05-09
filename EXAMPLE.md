# Example
All methods example.

[A](#A) | [B](#B) | [C](#C) | [D](#D) | [E](#E) | [F](#F) | [G](#G) | [H](#H) | [I](#I) | [J](#J) | [K](#K) | [L](#L) | [M](#M) | [N](#N) | [O](#O) | [P](#P) | [Q](#Q) | [R](#R) | [S](#S) | [T](#T) | [U](#U) | [V](#V) | [W](#W) | [X](#X) | [Y](#Y) | [Z](#Z)

## <a name="A"> </a>A

#### All - [all()]()
The `all` method returns the underlying array represented by the collection:
```
 collect([1, 2, 3])->all();
 
 // [1, 2, 3]
 ```

## <a name="B"> </a>B

## <a name="C"> </a>C

#### Count - [count()]()
The `count` method returns the total number of items in the collection:
```
 $collection = collect([1, 2, 3, 4, 5, 6]);
 
 $collection->count();
 
 // 6
```

## <a name="D"> </a>D

## <a name="E"> </a>E

#### Each - [each()]()
The `each` method iterates over the items in the collection and passes each item to a callback:
```
$collection->each(function ($item, $key) {
    //
});
```
If you would like to stop iterating through the items, you may return false from your callback:

```
$collection->each(function ($item, $key) {
    if (/* some condition */) {
        return false;
    }
});
```

## <a name="F"> </a>F

#### First - [first()]()
The `first` method returns the first element in the collection that passes a given truth test:
```
 collect([1, 2, 3, 4])->first();
 
 // 1
```
 
 ```
 collect([])->first('empty');
  
  // return empty
```

#### Filter - [filter()]()

```
//
```

## <a name="G"> </a>G

## <a name="H"> </a>H

## <a name="I"> </a>I

#### IsEmpty - [isEmpty()]()
The `isEmpty` method returns true if the collection is empty; otherwise, false is returned:
```
 collect([])->isEmpty();
 
 // true
```

## <a name="J"> </a>J

## <a name="K"> </a>K

#### Keys - [keys()]()

```
//
```

## <a name="L"> </a>L

#### Last - [last()]()
The `last` method returns the last element in the collection that passes a given truth test:
```
 collect([1, 2, 3, 4])->last();
 
 // 4
```
 
 ```
 collect([])->last('empty');
  
  // return empty
```

## <a name="M"> </a>M

#### Map - [map()]()

```
//
```

#### Merge - [merge()]()

```
//
```

## <a name="N"> </a>N

## <a name="O"> </a>O

## <a name="P"> </a>P

## <a name="Q"> </a>Q

## <a name="R"> </a>R

## <a name="S"> </a>S

## <a name="T"> </a>T

#### ToJson - [toJson()]()

```
//
```

## <a name="U"> </a>U

## <a name="V"> </a>V

## <a name="W"> </a>W

## <a name="X"> </a>X

## <a name="Y"> </a>Y

## <a name="Z"> </a>Z